import classNames from 'classnames/bind';
import { useState, useEffect, useCallback, memo } from 'react';
import Button from '~/components/Button';
import { Promo, Address, Summary, Info, Pay } from '~/layouts/components/Checkout';
import toast, { Toaster } from 'react-hot-toast';
import styles from './Checkout.module.scss';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPaypal } from '@fortawesome/free-brands-svg-icons';
const cx = classNames.bind(styles);
function Checkout() {
   const [checkInfo, setCheckInfo] = useState(false);
   const [checkAddress, setCheckAddress] = useState(false);
   const [promo, setPromo] = useState('');
   const [info, setInfo] = useState({ name: '', phone: '', email: '' });
   const [address, setAddress] = useState();
   const callbackPromo = useCallback((childData) => {
      setPromo(childData);
   }, []);
   const callbackInfo = useCallback((childData) => {
      if (childData !== undefined) {
         setInfo(childData);
         notifyCheckValidInfo(childData.name, childData.phone, childData.email);
      }
   }, []);
   const callbackAddress = useCallback((childData) => {
      setAddress(childData);
   }, []);
   const handleSubmit = () => {
      !checkInfo ? setCheckInfo(true) : setCheckInfo(false);
      checkValidInfo(info) && notifyCheckValidAddress(address);
      console.log(address);
      console.log(info);
   };
   const checkValidInfo = (data) => {
      if (data.name === '') return false;
      // eslint-disable-next-line
      var phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
      var digitPhone = data.phone.replace(/\s/g, '');
      if (!phoneRe.test(digitPhone)) return false;
      // eslint-disable-next-line
      var emailRe =
         /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      var digitEmail = data.email.toLowerCase();
      if (!emailRe.test(digitEmail) && digitEmail !== '') return false;
      return true;
   };
   const notifyCheckValidInfo = (name, phone, email) => {
      // eslint-disable-next-line
      var phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
      var digitPhone = phone.replace(/\s/g, '');
      // eslint-disable-next-line
      var emailRe =
         /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      var digitEmail = email.toLowerCase();
      name === ''
         ? notify('Vui lòng nhập tên')
         : !phoneRe.test(digitPhone)
         ? notify('Vui lòng nhập số điện thoại')
         : !emailRe.test(digitEmail) && digitEmail !== ''
         ? notify('Vui lòng nhập đúng định dạng email')
         : console.log('Info Valid');
      // if (name === '') {
      //    notify('Vui lòng nhập tên');
      // } else if (!phoneRe.test(digitPhone)) {
      //    notify('Vui lòng nhập số điện thoại');
      // } else if (!emailRe.test(digitEmail) && digitEmail !== '') {
      //    notify('Vui lòng nhập đúng định dạng email');
      // } else if (address === undefined) {
      //    notify('Vui lòng nhập địa chỉ');
      // } else {
      //    console.log('Valid');
      // }
   };
   const notifyCheckValidAddress = (address) => {
      address === undefined ? notify('Vui lòng điền đầy đủ địa chỉ') : console.log('Valid Address');
   };
   const notify = (text) => toast.error(text);

   console.log('render - checkout');
   console.log(address);
   return (
      <div className={cx('wrapper')}>
         <Toaster position="top-right" reverseOrder={false} />
         <div className={cx('title')}>CHECK OUT</div>
         <div className={cx('content')}>
            <div className={cx('left-block')}>
               <div className={cx('promo')}>
                  <Promo callbackFunction={callbackPromo} />
               </div>
               <div className={cx('summary')}>
                  <Summary />
               </div>
            </div>
            <div className={cx('right-block')}>
               <div className={cx('info')}>
                  <Info callbackInfo={callbackInfo} checkInfo={checkInfo} />
               </div>
               <div className={cx('address')}>
                  <Address callbackAddress={callbackAddress} checkAddress={checkAddress} />
               </div>
               <div className={cx('payment')}>
                  <Pay />
               </div>
               <div className={cx('btn')}>
                  <Button primary className={cx('submit')} onClick={handleSubmit}>
                     ĐẶT HÀNG VÀ THANH TOÁN
                  </Button>
               </div>
            </div>
         </div>
      </div>
   );
}

export default memo(Checkout);
