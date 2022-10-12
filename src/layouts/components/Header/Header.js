import classNames from 'classnames/bind';
import { Link } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBagShopping, faLocationDot, faPhone, faTruckFast, faUserLarge } from '@fortawesome/free-solid-svg-icons';

import config from '~/config';
import images from '~/assets/images';
import styles from './Header.module.scss';
import Search from '~/layouts/components/Search/Search';

const cx = classNames.bind(styles);
function Header() {
   return (
      <header className={cx('wrapper')}>
         <div className={cx('inner')}>
            <Link to={config.routes.home} className={cx('logo')}>
               <img src={images.logo} alt="sellPhoneS" />
            </Link>
            <Search />

            <div className={cx('action')}>
               <div className={cx('item')}>
                  <button>
                     <FontAwesomeIcon icon={faPhone} />
                  </button>
                  <p>Gọi mua hàng 1900 1900</p>
               </div>
               <div className={cx('item')}>
                  <button>
                     <FontAwesomeIcon icon={faLocationDot} />
                  </button>
                  <p>Cửa hàng gần đây</p>
               </div>
               <Link to={config.routes.lookup}>
                  <div className={cx('item')}>
                     <button>
                        <FontAwesomeIcon icon={faTruckFast} />
                     </button>
                     <p>Tra cứu đơn hàng</p>
                  </div>
               </Link>
               <div className={cx('item')}>
                  <button>
                     <FontAwesomeIcon icon={faBagShopping} />
                  </button>
                  <p>Giỏ hàng</p>
               </div>
               <div className={cx('item')}>
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
