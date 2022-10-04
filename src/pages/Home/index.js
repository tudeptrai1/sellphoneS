import classNames from 'classnames/bind';

import MenuTree from '~/layouts/components/MenuTree';
import Swiper from '~/layouts/components/Swiper/Swiper';
import SearchTag from '~/layouts/components/SearchTag';
import images from '~/assets/images';
import styles from './Home.module.scss';
import Banner from '~/layouts/components/Banner';
import FeaturedProduct from '~/layouts/components/FeaturedProduct/FeaturedProduct';
const cx = classNames.bind(styles);

// const bannerImgList = [
//    { imgSource: banner.banner1, alt: '' },
//    { imgSource: banner.banner2, alt: '' },
//    { imgSource: banner.banner3, alt: '' },
// ];
const bannerCenter = { imgSource: images.bannerCenter, alt: '' };

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
            <Banner url={bannerCenter.imgSource} />
         </div>
         <div className={cx('search-tag')}>
            <SearchTag />
         </div>
         <div className={cx('featured-products')}>
            <FeaturedProduct title={'ĐIỆN THOẠI NỔI BẬT NHẤT'} />
         </div>
      </div>
   );
}

export default Home;
