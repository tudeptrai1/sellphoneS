import React, { useState } from 'react';
// Import Swiper React components
import { Swiper, SwiperSlide } from 'swiper/react';
import PropTypes from 'prop-types';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';
import { Pagination } from 'swiper';

import classNames from 'classnames/bind';
import styles from './FeaturedProduct.module.scss';
import FeaturedProductItem from './FeaturedProductItem';
const cx = classNames.bind(styles);

function FeaturedProduct({ title }) {
   // eslint-disable-next-line
   const [productList, setProductList] = useState([
      {
         id: 1,
         name: 'iPhone 10',
         image: '/assets/images/products/1/1.jpg',
         price: 21000000,
         brand: 'Apple',
         discount: 0,
      },
      {
         id: 2,
         name: 'iPhone 11',
         image: '/assets/images/products/2/2.jpg',
         price: 22000000,
         brand: 'Apple',
         discount: 1000000,
      },
      {
         id: 3,
         name: 'iPhone 12',
         image: '/assets/images/products/3/3.jpg',
         price: 23000000,
         brand: 'Apple',
         discount: 2000000,
      },
      {
         id: 4,
         name: 'iPhone 13',
         image: '/assets/images/products/4/4.jpg',
         price: 24000000,
         brand: 'Apple',
         discount: 1300000,
      },
      {
         id: 5,
         name: 'iPhone 14',
         image: '/assets/images/products/5/5.jpg',
         price: 25000000,
         brand: 'Apple',
         discount: 1400000,
      },
      {
         id: 6,
         name: 'iPhone 15',
         image: '/assets/images/products/6/6.jpg',
         price: 26000000,
         brand: 'Apple',
         discount: 1500000,
      },
      {
         id: 7,
         name: 'iPhone 16',
         image: '/assets/images/products/7/7.jpg',
         price: 27000000,
         brand: 'Apple',
         discount: 1600000,
      },
      {
         id: 8,
         name: 'iPhone 17',
         image: '/assets/images/products/8/8.jpg',
         price: 28000000,
         brand: 'Apple',
         discount: 1700000,
      },
      {
         id: 9,
         name: 'iPhone 18',
         image: '/assets/images/products/9/9.jpg',
         price: 29000000,
         brand: 'Apple',
         discount: 900000,
      },
   ]);
   return (
      <div className={cx('wrapper')}>
         <p className={cx('title')}>{title}</p>
         <Swiper
            slidesPerGroup={3}
            slidesPerView={4}
            grid={{
               rows: 1,
            }}
            grabCursor={true}
            className={cx('swiper')}
            // slidesPerView={1}
            spaceBetween={30}
            pagination={{
               clickable: true,
               bulletClass: `swiper-pagination-bullet`,
            }}
            breakpoints={{
               '@0.00': {
                  slidesPerView: 1,
                  spaceBetween: 10,
               },
               '@0.75': {
                  slidesPerView: 2,
                  spaceBetween: 20,
               },
               '@1.00': {
                  slidesPerView: 3,
                  spaceBetween: 40,
               },
               '@1.50': {
                  slidesPerView: 4,
                  spaceBetween: 50,
               },
            }}
            modules={[Pagination]}
         >
            {productList.map((product) => (
               <SwiperSlide key={product.id}>
                  <FeaturedProductItem
                     key={product.id}
                     id={product.id}
                     name={product.name}
                     image={product.image}
                     price={product.price}
                     brand={product.brand}
                     discount={product.discount}
                  />
               </SwiperSlide>
            ))}
         </Swiper>
      </div>
   );
}
FeaturedProduct.propTypes = {
   title: PropTypes.string,
};
export default FeaturedProduct;
