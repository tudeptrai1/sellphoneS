import classNames from 'classnames/bind';

import MenuTree from '~/layouts/components/MenuTree';
import Swiper from '~/layouts/components/Swiper/Swiper';
import SearchTag from '~/layouts/components/SearchTag';
import images from '~/assets/images';
import styles from './Home.module.scss';
import Image from '~/components/Image';

import FeaturedProduct from '~/layouts/components/FeaturedProduct';
import BoxProducts from '~/layouts/components/BoxProducts';
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
         </div>
         <div className={cx('center-banner')}>
            <Image src={bannerCenter.src} />
         </div>
         <div className={cx('search-tag')}>
            <SearchTag />
         </div>
         <div className={cx('featured-products')}>
            <FeaturedProduct title={'ĐIỆN THOẠI NỔI BẬT NHẤT'} />
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
