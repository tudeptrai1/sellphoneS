import classNames from 'classnames/bind';
import { Link } from 'react-router-dom';
import { useEffect, useState, useRef } from 'react';
import * as ReactDOM from 'react-dom';
import { useSelector, useDispatch } from 'react-redux';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBagShopping, faLocationDot, faPhone, faTruckFast, faUserLarge } from '@fortawesome/free-solid-svg-icons';

import { Navigate } from 'react-router-dom';
import { useNavigate } from 'react-router-dom';
import { useCallback } from 'react';
import config from '~/config';
import images from '~/assets/images';
import styles from './Header.module.scss';
import Search from '~/layouts/components/Search/Search';
import * as cartService from '~/services/cartService';
import { setAmountCart } from '~/redux/generalInfoSlice';

const cx = classNames.bind(styles);
function Header() {
   const navigate = useNavigate();
   const generalInfo = useSelector((state) => state.generalInfo);
   const dispatch = useDispatch();
   const [showSearch, setShowSearch] = useState();

   const handleScroll = () => {
      window.innerWidth <= 420 && setShowSearch(window.scrollY >= 200);
   };
   useEffect(() => {
      if (window.innerWidth <= 420) {
         window.addEventListener('scroll', handleScroll);
         return () => {
            window.removeEventListener('scroll', handleScroll);
         };
      }
   }, []);
   useEffect(() => {
      if (window.innerWidth <= 420) {
         var sign = ReactDOM.findDOMNode(document.getElementById('signIcon'));
         var action = ReactDOM.findDOMNode(document.getElementById('actionIcon'));
         var logo = ReactDOM.findDOMNode(document.getElementById('logo'));
         var search = ReactDOM.findDOMNode(document.getElementById('search'));
         var searchBoxResult = ReactDOM.findDOMNode(document.getElementById('searchBoxResult'));
         if (showSearch === true) {
            logo.style.width = '25%';
            search.style.display = 'block';
            search.style.transition = ' visibility 0s, opacity 0.5s linear';
            search.style.visibility = 'visible';
            search.style.opacity = '1';
            search.style.width = '50%';
            sign.style.display = 'block';
            action.style.width = '25%';
         }
         if (showSearch === false) {
            logo.style.display = 'block';
            logo.style.width = '50%';

            // search.style.display = 'none';
            // search.style.visibility = 'hidden';
            search.style.width = '0%';
            search.style.transition = 'visibility 0s';
            search.style.opacity = '0';

            sign.style.display = 'block';
            action.style.width = '50%';
         }
      }
   }, [showSearch]);
   useEffect(() => {
      const fetchAmount = async () => {
         if (generalInfo.user !== null) {
            const number = await cartService.count(generalInfo.user.id);
            dispatch(setAmountCart({ amount: number }));
         }
      };
      fetchAmount();
   }, []);
   const handleLogOut = () => {
      localStorage.clear();
      window.location.href = '/';
   };
   // const handleLogOut = useCallback(() => navigate('/checkout', { replace: true }), [navigate]);

   return (
      <header className={cx('wrapper')}>
         <div className={cx('inner')}>
            <Link id="logo" to={config.routes.home} className={cx('logo')}>
               <img src={images.logo} alt="sellPhoneS" />
            </Link>
            <div id="search" className={cx('searchBox')}>
               <Search />
            </div>

            <div id="actionIcon" className={cx('action')}>
               {/* <div className={cx('item')}>
                  <button>
                     <FontAwesomeIcon icon={faPhone} />
                  </button>
                  <p>1900 1900</p>
               </div>
               <div className={cx('item')}>
                  <button>
                     <FontAwesomeIcon icon={faLocationDot} />
                  </button>
                  <p>Cửa hàng</p>
               </div> */}
               <Link to={config.routes.lookup}>
                  <div className={cx('item')}>
                     <button>
                        <FontAwesomeIcon icon={faTruckFast} />
                     </button>
                     <p>Tra cứu</p>
                  </div>
               </Link>
               <Link to={config.routes.cart} id="cartIcon" className={cx('cart')}>
                  <div className={cx('item')}>
                     <button className={cx('icon')}>
                        <FontAwesomeIcon style={{ boxShadow: 'var(--box-shadow-thick)' }} icon={faBagShopping} />
                     </button>
                     <p className={cx('amount')}>
                        {window.innerWidth > 420 && 'Giỏ hàng: '} {generalInfo.amountCart}
                     </p>
                  </div>
               </Link>
               {generalInfo.user === null ? (
                  <Link to={config.routes.sign} id="signIcon" className={cx('login')}>
                     <div className={cx('item')}>
                        <button>
                           <FontAwesomeIcon icon={faUserLarge} />
                        </button>
                        <p>Đăng nhập</p>
                     </div>
                  </Link>
               ) : (
                  <Link id="signIcon" className={cx('login')}>
                     <div className={cx('item')}>
                        <button>
                           <FontAwesomeIcon icon={faUserLarge} />
                        </button>
                        {/* <p>Đăng nhập</p> */}
                        <p>
                           {/* {window.innerWidth > 420 && 'Welcome '} */}
                           {generalInfo.user.full_name}
                        </p>
                     </div>
                  </Link>
               )}
               {generalInfo.user !== null && (
                  <div className={cx('account-function')}>
                     <Link to={config.routes.account}>Tài khoản</Link>
                     <p onClick={handleLogOut}>Đăng xuất</p>
                  </div>
               )}
            </div>
         </div>
      </header>
   );
}

export default Header;
