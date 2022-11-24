import classNames from 'classnames/bind';
import { useState, useEffect, useCallback, memo } from 'react';
import Button from '~/components/Button';
import { Promo, Address, Summary, Info, Pay } from '~/layouts/components/Checkout';
import toast, { Toaster } from 'react-hot-toast';
import styles from './Checkout.module.scss';

const cx = classNames.bind(styles);
function Checkout() {
   const [checkInfo, setCheckInfo] = useState(false);
   const [checkAddress, setCheckAddress] = useState(false);
   const [promo, setPromo] = useState('');
   const [info, setInfo] = useState({ name: '', phone: '', email: '' });
   const [address, setAddress] = useState();

   const handleSubmit = () => {};
   const checkValidInfo = (data) => {};
   const notifyCheckValidInfo = (name, phone, email) => {};

   const notify = (text) => toast.error(text);

   return (
      <div className={cx('wrapper')}>
         <Toaster position="top-right" reverseOrder={false} />
         <div className={cx('title')}>CHECK OUT</div>
         <div className={cx('content')}>
            <div className={cx('left-block')}>
               <div className={cx('promo')}>
                  <Promo />
               </div>
               <div className={cx('summary')}>
                  <Summary />
               </div>
            </div>
            <div className={cx('right-block')}>
               <div className={cx('info')}>
                  <Info />
               </div>
               <div className={cx('address')}>
                  <Address />
               </div>
               <div className={cx('payment')}>
                  <Pay />
               </div>
               {/* <div className={cx('btn')}>
                  <Button primary className={cx('submit')} onClick={handleSubmit}>
                     ĐẶT HÀNG VÀ THANH TOÁN
                  </Button>
               </div> */}
            </div>
         </div>
      </div>
   );
}

export default memo(Checkout);
