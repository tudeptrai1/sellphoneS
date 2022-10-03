import classNames from 'classnames/bind';

import MenuTree from '~/layouts/components/MenuTree';
import Swiper from '~/layouts/components/Swiper';
import banner from '~/assets/banner-homepage';

import styles from './Home.module.scss';
import Banner from '~/layouts/components/Banner';
const cx = classNames.bind(styles);

// const bannerImgList = [
//    { imgSource: banner.banner1, alt: '' },
//    { imgSource: banner.banner2, alt: '' },
//    { imgSource: banner.banner3, alt: '' },
// ];
const bannerCenter = { imgSource: banner.bannerCenter, alt: '' };

function Home() {
   return (
      <div className={cx('wrapper')}>
         <div className={cx('block-top-home')}>
            <div className={cx('menu-tree')}>
               <MenuTree />
            </div>
            <div className={cx('swiper')}>
               <Swiper />
            </div>
            {/* <div className={cx('banner')}>
               {bannerImgList.map((banner, index) => (
                  <div key={index} className={cx('image')}>
                     <Banner key={index} item={banner} />
                  </div>
               ))}
            </div> */}
         </div>
         <div className={cx('center-banner')}>
            <Banner item={bannerCenter} />
         </div>
         <div className={cx('search-tag')}></div>
         <div className={cx('product-list-title')}>
            <div className={cx('title')}>ĐIỆN THOẠI NỔI BẬT</div>
         </div>
      </div>
   );
}

export default Home;
