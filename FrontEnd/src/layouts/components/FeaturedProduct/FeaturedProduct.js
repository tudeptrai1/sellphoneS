import React, { useState } from 'react';
// Import Swiper React components
import { Swiper, SwiperSlide } from 'swiper/react';
import PropTypes from 'prop-types';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/grid';
import { Pagination, Autoplay, Navigation } from 'swiper';

import classNames from 'classnames/bind';
import styles from './FeaturedProduct.module.scss';
import FeaturedProductItem from '../FeaturedProductItem';
import BoxProductItem from '~/layouts/components/BoxProductItem';
const cx = classNames.bind(styles);

function FeaturedProduct({ productList, title }) {
   const handleSetSliderPerView = () => {
      if (window.innerWidth <= 420) return '2';
      if (window.innerWidth > 420) return '4';
   };

   return (
      <div className={cx('wrapper')}>
         <p className={cx('title')}>{title}</p>
         <Swiper
            slidesPerGroup={2}
            slidesPerView={handleSetSliderPerView()}
            grid={{
               rows: 1,
            }}
            grabCursor={true}
            className={cx('swiper')}
            spaceBetween={0}
            // autoplay={{
            //    delay: 2500,
            //    disableOnInteraction: false,
            // }}
            pagination={{
               clickable: true,
               bulletClass: `swiper-pagination-bullet`,
            }}
            navigation={true}
            modules={[Autoplay, Pagination, Navigation]}
         >
            {productList.map((product, index) => (
               <SwiperSlide className={cx('item')} key={index}>
                  <BoxProductItem product={product} key={product.id} />
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
