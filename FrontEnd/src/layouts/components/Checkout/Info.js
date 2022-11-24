import * as ReactDOM from 'react-dom';
import classNames from 'classnames/bind';
import toast, { Toaster } from 'react-hot-toast';
import ReactPhoneInput from 'react-phone-input-2';
import { useSelector, useDispatch } from 'react-redux';
import { useEffect, useState, memo, useCallback, sendData, useRef } from 'react';
import 'react-phone-input-2/lib/style.css';
import { phoneRe, emailRe } from '~/utils/format';

import { updateNameReceive, updatePhoneReceive, updateEmailReceive } from '~/redux/orderSlice';

import styles from './Info.module.scss';

const cx = classNames.bind(styles);
function Info() {
   const orderObject = useSelector((state) => state.order);
   const dispatch = useDispatch();
   const phoneRef = useRef();
   const emailRef = useRef();



   const handleChangeName = (e) => {
      dispatch(updateNameReceive({ name: e.target.value }));
   };
   const handleChangeEmail = (e) => {
      dispatch(updateEmailReceive({ email: e.target.value }));
   };
   const handleChangePhone = (e) => {
      var phone = ReactDOM.findDOMNode(document.getElementById('inputPhone'));
      var digitPhone = phone.children[0].childNodes[1].value.replace(/\s/g, '');
      dispatch(updatePhoneReceive({ phone: digitPhone }));
   };
   // toast.remove();
   // !phoneRe.test(digitPhone) && toast.error('So dien thoai khong chinh xac');

   // console.log('render information');
   return (
      <div className={cx('wrapper')}>
         {/* <Toaster position="top-right" reverseOrder={false} /> */}
         <div className={cx('title')}>THÔNG TIN ĐẶT HÀNG</div>
         <div className={cx('input')}>
            <div className={cx('contact-item')}>
               <span>Họ và tên</span>
               <input
                  id="inputName"
                  className={cx('contact-item-input')}
                  placeholder="Nhập tên người nhận"
                  value={orderObject.nameReceive}
                  onChange={handleChangeName}
               />
            </div>
            <div className={cx('contact')}>
               <div className={cx('contact-item')}>
                  <span>Số điện thoại</span>
                  <div id="inputPhone">
                     <ReactPhoneInput
                        ref={phoneRef}
                        className={cx('contact-phone-input')}
                        country={'vn'}
                        enableSearchField
                        value={orderObject.phoneReceive}
                        onChange={handleChangePhone}
                     />
                  </div>
                  <span style={{ color: 'red' }}>
                     {!phoneRe.test(orderObject.phoneReceive) &&
                        orderObject.phoneReceive !== '' &&
                        'Số điện thoại không hợp lệ'}
                  </span>
               </div>
               <div className={cx('contact-item')}>
                  <span>Email</span>
                  <input
                     ref={phoneRef}
                     id="inputEmail"
                     className={cx('contact-item-input')}
                     placeholder="Nhập email người nhận"
                     onChange={handleChangeEmail}
                     value={orderObject.emailReceive}
                  />
                  <span style={{ color: 'red' }}>
                     {!emailRe.test(orderObject.emailReceive) &&
                        orderObject.emailReceive !== '' &&
                        'Email không hợp lệ'}
                  </span>
               </div>
            </div>
         </div>
      </div>
   );
}

export default memo(Info);
