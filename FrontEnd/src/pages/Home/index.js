import classNames from 'classnames/bind';
import axios from 'axios';

import MenuTree from '~/layouts/components/MenuTree';
import Swiper from '~/layouts/components/Swiper/Swiper';
import images from '~/assets/images';
import Image from '~/components/Image';

import FeaturedProduct from '~/layouts/components/FeaturedProduct';
import BoxProducts from '~/layouts/components/BoxProducts';
import styles from './Home.module.scss';
import TagList from '~/layouts/components/TagList';
import { useState, useEffect } from 'react';
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
const typeList = [
   { name: 'iPhone', code: '1' },
   { name: 'Samsung', code: '2' },
   { name: 'Oppo', code: '3' },
   { name: 'Vivo', code: '4' },
   { name: 'Xiaomi', code: '5' },
   { name: 'Nokia', code: '6' },
   { name: 'OnePlus', code: '7' },
   { name: 'Realme', code: '8' },
];
const phoneList = [
   { name: 'iPhone 14', id: '1' },
   { name: 'iPhone 14 Pro Max', id: '2' },
   { name: 'Samsung Z Flip 4', id: '3' },
];
function Home() {
   const [featuredList, setFeaturedList] = useState([]);
   const fetchDataPhoneList = () => {
      axios({
         method: 'get',
         url: 'https://dummyjson.com/products',
         // headers: {
         //    token: 'd232b571-551c-11ed-8a70-52fa25d1292f',
         // },
      })
         .then((res) => {
            console.log(res.data);
            setFeaturedList(res.data.products);
         })
         .catch((err) => console.log(err));
   };
   useEffect(() => {
      fetchDataPhoneList();
   }, []);
   return (
      <div className={cx('wrapper')}>
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
            <TagList productShow={true} brandShow={true} productList={phoneList} brandList={typeList} />
         </div>
         <div className={cx('featured-products')}>
            <FeaturedProduct productList={featuredList} title={'ĐIỆN THOẠI NỔI BẬT NHẤT'} />
         </div>
         <div className={cx('small-banner')}>
            {bannerSmalls.map((banner, index) => (
               <div className={cx('box')} key={index}>
                  <Image src={banner.src} alt={banner.alt} className={cx('image')} />
               </div>
            ))}
         </div>
         {listFirmShow.map((firm, index) => (
            <div key={index} className={cx('box-products')}>
               <BoxProducts title={firm.name} orderBy={firm.orderBy} typeOrder={firm.typeOrder} />
            </div>
         ))}
      </div>
   );
}

export default Home;
