// Import Swiper React components
import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay, Pagination, Navigation } from 'swiper';
import classNames from 'classnames/bind';
import Slide from './Slide';
import styles from './Swiper.module.scss';
import 'swiper/css';
import images from '~/assets/images';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
const cx = classNames.bind(styles);

// Import Swiper React components
const imgList = [
   { imgSource: images.swiper1, alt: 'a' },
   { imgSource: images.swiper2, alt: 'a' },
   { imgSource: images.swiper3, alt: 'a' },
];

export default function Component() {
   return (
      <div className={cx('swiper')}>
         <Swiper
            spaceBetween={30}
            centeredSlides={true}
            autoplay={{
               delay: 2500,
               disableOnInteraction: false,
            }}
            pagination={{
               clickable: true,
            }}
            navigation={true}
            modules={[Autoplay, Pagination, Navigation]}
            className="mySwiper"
         >
            {imgList.map((img, index) => (
               <SwiperSlide key={index}>
                  <Slide key={index} item={img} />
               </SwiperSlide>
            ))}
         </Swiper>
      </div>
   );
}
