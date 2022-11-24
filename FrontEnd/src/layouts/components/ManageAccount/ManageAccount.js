import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Link } from 'react-router-dom';
import "./ManageAccount.css";
import user from './user.jpg';
import config from '~/config';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faUserLarge} from '@fortawesome/free-solid-svg-icons';
import {FaSignOutAlt, FaHeart ,FaWpforms, FaKey} from 'react-icons/fa';
import axios from 'axios';

function ManageAccount() {
   return(      
         <div className="account_sidebar col-left">
            <div className="account_name">
               <div class="account_icon">
                  <img src={user} alt="user" className="icon_user"/>
               </div>
               <div className="account_text">
                  <p>Chào bạn</p>
                  <span>Trần Đăng Khoa</span>
               </div>
            </div>
            <div className="account_menu">
               <Link to={config.routes.account} className="account_menu_item">
                  <div className="box_icon">
                     <FontAwesomeIcon icon={faUserLarge} />
                  </div>
                  <p>Tài khoản của bạn</p>
               </Link>
               <Link to={`/orderdetail`} className="account_menu_item">
                  <div className="box_icon">
                    <FaWpforms/>
                  </div>
                  <p>Đơn hàng của bạn</p>
               </Link>
               <Link to={`/wishlist`} className="account_menu_item">
                  <div className="box_icon">
                     <FaHeart/>
                  </div>
                  <p>Sản phẩm yêu thích</p>
               </Link>
               <Link to={`/changepassword`} className="account_menu_item">
                  <div className="box_icon">
                     <FaKey/>
                  </div>
                  <p>Đổi mật khẩu</p>
               </Link>
               <div className="account_menu_item">
                  <div className="box_icon">
                     <FaSignOutAlt/>
                  </div>
                  <p>Thoát tài khoản</p>
               </div>
            </div>
         </div>
   );
}

export default ManageAccount;
