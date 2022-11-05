import { useEffect, useState, memo, useCallback, sendData } from 'react';
import classNames from 'classnames/bind';
import * as ReactDOM from 'react-dom';
import toast, { Toaster } from 'react-hot-toast';

import 'react-phone-input-2/lib/style.css';
import ReactPhoneInput from 'react-phone-input-2';
import styles from './Info.module.scss';

const cx = classNames.bind(styles);
function Info({ callbackInfo, checkInfo }) {
   const [phone, setPhone] = useState('');
   const [name, setName] = useState('');
   const [email, setEmail] = useState('');
   const [check, setCheck] = useState(checkInfo);
   const [info, setInfo] = useState({ name: '', phone: '', email: '' });
   useEffect(() => {
      sendData();
   });

   sendData = () => {
      const data = getData();
      callbackInfo(data);
   };
   const getData = () => {
      var name = ReactDOM.findDOMNode(document.getElementById('inputName'));
      var phone = ReactDOM.findDOMNode(document.getElementById('inputPhone'));
      var email = ReactDOM.findDOMNode(document.getElementById('inputEmail'));
      var nameCallBack = name.value;
      var phoneCallBack = phone.children[0].childNodes[1].value;
      var emailCallBack = email.value;
      // eslint-disable-next-line
      var phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
      var digitPhone = phoneCallBack.replace(/\s/g, '');
      // eslint-disable-next-line
      var emailRe =
         /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      var digitEmail = emailCallBack.toLowerCase();
      // if (nameCallBack === '') {
      //    notify('Vui lòng nhập tên');
      // } else if (!phoneRe.test(digitPhone)) {
      //    notify('Vui lòng nhập số điện thoại');
      // } else if (!emailRe.test(digitEmail) && digitEmail !== '') {
      //    notify('Vui lòng nhập đúng định dạng email');
      // } else {
      //    console.log('Valid');
      // }
      return { name: nameCallBack, phone: phoneCallBack, email: emailCallBack };
   };
   const notify = (text) => toast.error(text);

   console.log('render information');
   return (
      <div className={cx('wrapper')}>
         <Toaster position="top-right" reverseOrder={false} />
         <div className={cx('title')}>THÔNG TIN ĐẶT HÀNG</div>
         <div className={cx('input')}>
            <div className={cx('contact-item')}>
               <span>Họ và tên</span>
               <input
                  id="inputName"
                  className={cx('contact-item-input')}
                  placeholder="Nhập tên người nhận"
                  // value={name}
                  // onChange={handleChangeName}
               />
            </div>
            <div className={cx('contact')}>
               <div className={cx('contact-item')}>
                  <span>Số điện thoại</span>
                  <div id="inputPhone">
                     <ReactPhoneInput
                        className={cx('contact-phone-input')}
                        country={'vn'}
                        // enableSearchField
                        // value={phone}
                        // onChange={handleChangePhone}
                     />
                  </div>
               </div>
               <div className={cx('contact-item')}>
                  <span>Email</span>
                  <input
                     id="inputEmail"
                     className={cx('contact-item-input')}
                     placeholder="Nhập email người nhận"
                     // value={email}
                     // onChange={notify}
                  />
               </div>
            </div>
         </div>
      </div>
   );
}

export default memo(Info);
