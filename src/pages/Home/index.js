import classNames from 'classnames/bind';

import MenuTree from '~/components/Layout/components/MenuTree';
import Swiper from '~/components/Layout/components/Swiper';

import styles from './Home.module.scss';
const cx = classNames.bind(styles);

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
            <div className={cx('banner')}></div>
         </div>

         <h2>Home Page</h2>
      </div>
   );
}

export default Home;
