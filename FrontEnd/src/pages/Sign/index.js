import { useState } from 'react';
import * as ReactDOM from 'react-dom';
import { phoneRe, emailRe } from '~/utils/format';

import classNames from 'classnames/bind';
import toast, { Toaster } from 'react-hot-toast';
import styles from './Sign.module.scss';
import { Navigate } from 'react-router-dom';
import * as userService from '~/services/userService';
import * as cartService from '~/services/cartService';

import { setUser, setAmountCart } from '~/redux/generalInfoSlice';
import { useSelector, useDispatch } from 'react-redux';
const cx = classNames.bind(styles);

function Sign() {
   const dispatch = useDispatch();
   const generalInfo = useSelector((state) => state.generalInfo);
   const [email, setEmail] = useState('');
   const [name, setName] = useState('');
   const [phone, setPhone] = useState('');
   const [password, setPassword] = useState('');
   const [showLogin, setShowLogin] = useState(true);
   const handleClick = async () => {
      const login = await userService.login(email, password);

      if (login.status_code === 200) {
         localStorage.setItem('access_token', JSON.stringify(login.access_token));
         localStorage.setItem('user', JSON.stringify(login.user));
         dispatch(setUser({ user: login.user }));

         const number = cartService.count(login.user.id);
         number.then((number) => dispatch(setAmountCart({ amount: number })));
      } else {
         toast.remove();
         toast.error('Sai tên thông tin đăng nhập');
      }
   };

   const handleTransferRegister = () => {
      setShowLogin(false);
   };
   const handleTransferLogin = () => {
      setShowLogin(true);
   };
   const handleEmail = (e) => {
      setEmail(e.target.value);
   };
   const handlePass = (e) => {
      setPassword(e.target.value);
   };
   const handleName = (e) => {
      setName(e.target.value);
   };
   const handlePhone = (e) => {
      setPhone(e.target.value);
   };
   const handleClickRegister = async () => {
      toast.remove();
      let login;
      name === ''
         ? toast.error('Vui lòng nhập tên')
         : !phoneRe.test(phone.replace(/\s/g, ''))
         ? toast.error('Vui lòng nhập số điện thoại')
         : !emailRe.test(email.replace(/\s/g, ''))
         ? toast.error('Vui lòng nhập email')
         : password === ''
         ? toast.error('Vui lòng mật khẩu')
         : (login = await userService.register(name, email, phone, password, 'vietnam'));
      if (login.success && !login.exception) {
         toast.remove();
         toast.success('Đăng kí thành công');
      } else {
         toast.remove();
         toast.error('Đăng ký không thành công');
      }
   };
   if (generalInfo.user !== null) {
      return <Navigate to="/" />;
   } else
      return (
         <div className={cx('wrapper')}>
            <Toaster position="top-right" reverseOrder={false} />
            {showLogin ? (
               <div className={cx('login')} id="logForm">
                  <div className={cx('form')}>
                     <h2>Xin chào, đăng nhập để tận hưởng mua hàng</h2>

                     <input type="text" placeholder="Email" value={email} onChange={handleEmail} />
                     <input type="password" placeholder="Mật khẩu" value={password} onChange={handlePass} />
                     <input type="submit" value="Đăng nhập" className={cx('submit')} onClick={handleClick} />
                     <input
                        type="submit"
                        value=" Chưa có tài khoản? Đăng ký ngay"
                        className={cx('submit')}
                        onClick={handleTransferRegister}
                     />
                  </div>
               </div>
            ) : (
               <div className={cx('login')} id="registerForm">
                  <div className={cx('form')}>
                     <h2>Xin chào, đăng ký ngay để tận hưởng mua hàng</h2>
                     <input type="text" placeholder="Họ và tên" value={name} onChange={handleName} />
                     <input type="text" placeholder="Số điện thoại" value={phone} onChange={handlePhone} />

                     <input type="text" placeholder="Email" value={email} onChange={handleEmail} />
                     <input type="password" placeholder="Mật khẩu" value={password} onChange={handlePass} />
                     <input type="submit" value="Đăng ký ngay" className={cx('submit')} onClick={handleClickRegister} />
                     <input
                        type="submit"
                        value=" Đã có tài khoản? Đăng nhập ngay"
                        className={cx('submit')}
                        onClick={handleTransferLogin}
                     />
                  </div>
               </div>
            )}
         </div>
      );
}

export default Sign;
