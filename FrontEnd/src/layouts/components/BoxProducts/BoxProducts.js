import React, { useState } from 'react';
// Import Swiper React components
import { Swiper, SwiperSlide } from 'swiper/react';
import PropTypes from 'prop-types';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';
import { Grid, Pagination } from 'swiper';
import { Link } from 'react-router-dom';
import config from '~/config';

import classNames from 'classnames/bind';
import styles from './BoxProducts.module.scss';
import BoxProductItem from '../BoxProductItem';
const cx = classNames.bind(styles);
function BoxProducts({ productList }) {
   // eslint-disable-next-line
   const handleSetSliderPerView = () => {
      if (window.innerWidth <= 420) return 2;
      if (window.innerWidth > 420) return 4;
   };
   const handleSetSliderPerGroup = () => {
      if (window.innerWidth <= 420) return 2;
      if (window.innerWidth > 420) return 4;
   };
   const handleSetRow = () => {
      if (window.innerWidth <= 420) return 1;
      if (window.innerWidth > 420) return 2;
   };
   return (
      <div className={cx('wrapper')}>
         <p className={cx('title')}>{productList[0].brand.name}</p>
         <Swiper
            slidesPerGroup={handleSetSliderPerGroup()}
            slidesPerView={handleSetSliderPerView()}
            grid={{
               rows: handleSetRow(),
            }}
            className={cx('swiper-wrapper')}
            spaceBetween={30}
            pagination={{
               clickable: true,
               bulletClass: `swiper-pagination-bullet`,
            }}
            modules={[Grid, Pagination]}
         >
            {productList.map((product) => (
               <SwiperSlide key={product.id} className={cx('swiper-slide')}>
                  <BoxProductItem product={product} />
               </SwiperSlide>
            ))}
         </Swiper>
      </div>
   );
}
BoxProductItem.propTypes = {
   title: PropTypes.string,
   orderBy: PropTypes.string,
   typeOrder: PropTypes.string,
};
export default BoxProducts;
