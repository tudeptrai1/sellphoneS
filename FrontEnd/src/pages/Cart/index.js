import * as ReactDOM from 'react-dom';
import classNames from 'classnames/bind';
import { Navigate } from 'react-router-dom';
import { useNavigate } from 'react-router-dom';
import { useCallback, useEffect } from 'react';
import toast, { Toaster } from 'react-hot-toast';
import { useSelector, useDispatch } from 'react-redux';

import styles from './Cart.module.scss';
import CartItem from '~/components/CartItem';
import { formatCurrency } from '~/utils/format';
import * as cartService from '~/services/cartService';
import { setListCart } from '~/redux/generalInfoSlice';
import { setListOrder } from '~/redux/orderSlice';

const cx = classNames.bind(styles);
function Cart() {
   const generalInfo = useSelector((state) => state.generalInfo);
   const order = useSelector((state) => state.order);
   const navigate = useNavigate();
   const handleClick = useCallback(() => navigate('/checkout', { replace: true }), [navigate]);

   const dispatch = useDispatch();
   useEffect(() => {
      const fetchList = () => {
         if (generalInfo.listCart === null) {
            const res = cartService.get(generalInfo.user.id);
            res.then((data) => dispatch(setListCart({ listCart: data })));
         }
      };
      fetchList();
   }, []);
   useEffect(() => {
      dispatch(setListOrder({ list: [] }));
   }, []);
   if (generalInfo.user === null) {
      return <Navigate to="/sign" />;
   } else
      return (
         <div className={cx('wrapper')}>
            <Toaster position="top-right" reverseOrder={false} />
            <div className={cx('box-product')}>
               {generalInfo.listCart != null &&
                  generalInfo.listCart
                     .slice(0)
                     .reverse()
                     .map((item) => (
                        <div className={cx('product')} key={item.id}>
                           <CartItem data={item} />
                        </div>
                     ))}
            </div>
            <div className={cx('box-button')}>
               <div className={cx('info')}>
                  <div className={cx('item')}>
                     <p className={cx('title')}>Tổng tiền</p>
                     <p className={cx('content')}>{formatCurrency(order.total, '₫')}</p>
                  </div>
                  <div className={cx('item')}>
                     <p className={cx('title')}>Tổng khuyến mãi</p>
                     <p className={cx('content')}>-{formatCurrency(order.discount, '₫')}</p>
                  </div>
                  <hr
                     style={{
                        color: 'var(--primary)',
                        backgroundColor: 'var(--primary)',
                        height: 5,
                     }}
                  ></hr>
                  <div className={cx('item')}>
                     <p className={cx('title')}>Thanh toán</p>
                     <p className={cx('content')}>{formatCurrency(order.total - order.discount, '₫')}</p>
                  </div>
               </div>
               <button className={cx('button')} onClick={handleClick}>
                  THANH TOÁN NGAY
               </button>
            </div>
         </div>
      );
}

export default Cart;
