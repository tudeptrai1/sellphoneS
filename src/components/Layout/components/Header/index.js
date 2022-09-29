import classNames from 'classnames/bind';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {
   faBagShopping,
   faCircleXmark,
   faLocationDot,
   faMagnifyingGlass,
   faPhone,
   faSpinner,
   faTruckFast,
   faUser,
   faUserLarge,
} from '@fortawesome/free-solid-svg-icons';
import Tippy from '@tippyjs/react/headless';
import { useEffect, useState } from 'react';

import images from '~/assets/images';
import styles from './Header.module.scss';
import { Wrapper as PopperWrapper } from '~/components/Popper';
import SearchResultItem from './SearchResultItem';
const cx = classNames.bind(styles);
function Header() {
   const [searchResult, setSearchResult] = useState([]);
   useEffect(() => {
      setTimeout(() => {
         setSearchResult([]);
      });
   }, []);
   return (
      <header className={cx('wrapper')}>
         <div className={cx('inner')}>
            <div className={cx('logo')}>
               <img src={images.logo} alt="sellPhoneS" />
            </div>
            <Tippy
               interactive
               visible={searchResult.length > 0}
               render={(attrs) => (
                  <div className={cx('search-result')} tabIndex="-1" {...attrs}>
                     <PopperWrapper>
                        <SearchResultItem />
                        <SearchResultItem />
                        <SearchResultItem />
                        <SearchResultItem />
                     </PopperWrapper>
                  </div>
               )}
            >
               <div className={cx('search')}>
                  <input type="text" placeholder="Bạn muốn tìm gì..." spellCheck={false} />
                  <button className={cx('clear')}>
                     <FontAwesomeIcon icon={faCircleXmark} />
                  </button>
                  <FontAwesomeIcon className={cx('loading')} icon={faSpinner} />

                  <button className={cx('search-btn')}>
                     <FontAwesomeIcon icon={faMagnifyingGlass} />
                  </button>
               </div>
            </Tippy>

            <div className={cx('action')}>
               <div className={cx('call')}>
                  <button>
                     <FontAwesomeIcon icon={faPhone} />
                  </button>
                  <p>Gọi mua hàng 1900 1900</p>
               </div>
               <div className={cx('store-nearby')}>
                  <button>
                     <FontAwesomeIcon icon={faLocationDot} />
                  </button>
                  <p>Cửa hàng gần đây</p>
               </div>
               <div className={cx('order-lookup')}>
                  <button>
                     <FontAwesomeIcon icon={faTruckFast} />
                  </button>
                  <p>Tra cứu đơn hàng</p>
               </div>
               <div className={cx('cart')}>
                  <button>
                     <FontAwesomeIcon icon={faBagShopping} />
                  </button>
                  <p>Giỏ hàng</p>
               </div>
               <div className={cx('login')}>
                  <button>
                     <FontAwesomeIcon icon={faUserLarge} />
                  </button>
                  <p>Đăng nhập</p>
               </div>
            </div>
         </div>
      </header>
   );
}

export default Header;
