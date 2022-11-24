import classNames from 'classnames/bind';
import axios from 'axios';
import toast, { Toaster } from 'react-hot-toast';

import { useState, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import {
   updateListColor,
   updateListMemory,
   updateListBrand,
   updateListProduct,
   addListProduct,
} from '~/redux/generalInfoSlice';
import * as brandService from '~/services/brandService';
import * as productService from '~/services/productService';
import * as colorService from '~/services/colorService';
import * as memoryService from '~/services/memoryService';

import MenuTree from '~/layouts/components/MenuTree';
import Swiper from '~/layouts/components/Swiper/Swiper';
import images from '~/assets/images';
import Image from '~/components/Image';

import FeaturedProduct from '~/layouts/components/FeaturedProduct';
import BoxProducts from '~/layouts/components/BoxProducts';
import styles from './Home.module.scss';
import TagList from '~/layouts/components/TagList';
import { getListProduct } from '~/redux/productSlice';
const cx = classNames.bind(styles);

const bannerCenter = { src: images.bannerCenter, alt: '' };
const bannerSmalls = [
   { src: images.banner1, alt: '' },
   { src: images.banner2, alt: '' },
   { src: images.banner3, alt: '' },
];

const listFirmShow = [
   { name: 'APPLE', orderBy: 'price', typeOrder: 'desc' },
   { name: 'SAMSUNG', orderBy: 'price', typeOrder: 'desc' },
];
const phoneList = [
   { name: 'iPhone 14', id: '1' },
   { name: 'iPhone 14 Pro Max', id: '2' },
   { name: 'Samsung Z Flip 4', id: '3' },
];
function Home() {
   const product = useSelector((state) => state.product);
   const generalInfo = useSelector((state) => state.generalInfo);
   const dispatch = useDispatch();
   const [featuredList, setFeaturedList] = useState([]);
   const [brandList, setBrandList] = useState();
   const [colorList, setColorList] = useState();
   const [memoryList, setMemoryList] = useState();
   useEffect(() => {
      if (Object.keys(generalInfo.listBrand).length === 0) {
         const brand = brandService.all();
         brand.then((data) => {
            dispatch(updateListBrand({ listBrand: data }));

            data.map((brand) => {
               const product = productService.brand(brand.id);
               product.then((data) => dispatch(addListProduct({ list: data })));
            });
         });
         // .then(() => {
         //    if (Object.keys(generalInfo.listColor).length === 0) {
         //       const color = colorService.all();
         //       color
         //          .then((data) => {
         //             dispatch(updateListColor({ listColor: data }));
         //          })
         //          .then(() => {
         //             if (Object.keys(generalInfo.listMemory).length === 0) {
         //                const memory = memoryService.all();
         //                memory.then((data) => {
         //                   dispatch(updateListMemory({ listMemory: data }));
         //                });
         //             }
         //          });
         //    }
         // });
      }
   }, []);
   useEffect(() => {
      if (featuredList.length === 0) {
         const product = productService.brand(553);
         product.then((data) => setFeaturedList(data));
      }
   }, []);
   return (
      <div className={cx('wrapper')}>
         <Toaster position="top-right" reverseOrder={false} />

         <div className={cx('block-top-home')}>
            {window.innerWidth > 420 && (
               <div className={cx('menu-tree')}>
                  <MenuTree />
               </div>
            )}
            <div className={cx('swiper')}>
               <Swiper />
            </div>
         </div>
         <div className={cx('center-banner')}>
            <Image src={bannerCenter.src} />
         </div>
         <div className={cx('search-tag')}>
            <TagList />
         </div>
         <div className={cx('featured-products')}>
            {featuredList.length > 0 && (
               <FeaturedProduct productList={featuredList} title={'ĐIỆN THOẠI NỔI BẬT NHẤT'} />
            )}
         </div>
         <div className={cx('small-banner')}>
            {bannerSmalls.map((banner, index) => (
               <div className={cx('box')} key={index}>
                  <Image src={banner.src} alt={banner.alt} className={cx('image')} />
               </div>
            ))}
         </div>

         {generalInfo.listProduct.map(
            (list, index) =>
               Object.keys(list).length >= 4 && (
                  <div key={index} className={cx('box-products')}>
                     <BoxProducts productList={list} />
                  </div>
               ),
         )}
      </div>
   );
}

export default Home;
