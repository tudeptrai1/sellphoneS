import React, { useRef, useState } from 'react';
// Import Swiper React components
import { Swiper, SwiperSlide } from 'swiper/react';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';

import { Pagination } from 'swiper';

import classNames from 'classnames/bind';
import styles from './FeaturedProduct.module.scss';
const cx = classNames.bind(styles);

function FeaturedProduct({ title }) {
   return (
      <div className={cx('wrapper')}>
         <p className={cx('title')}>{title}</p>
         <Swiper
            className={cx('swiper')}
            slidesPerView={1}
            spaceBetween={10}
            pagination={{
               clickable: true,
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
            <SwiperSlide>Slide 1</SwiperSlide>
            <SwiperSlide>Slide 2</SwiperSlide>
            <SwiperSlide>Slide 3</SwiperSlide>
            <SwiperSlide>Slide 4</SwiperSlide>
            <SwiperSlide>Slide 5</SwiperSlide>
            <SwiperSlide>Slide 6</SwiperSlide>
            <SwiperSlide>Slide 7</SwiperSlide>
            <SwiperSlide>Slide 8</SwiperSlide>
            <SwiperSlide>Slide 9</SwiperSlide>
         </Swiper>
      </div>
   );
}

export default FeaturedProduct;
