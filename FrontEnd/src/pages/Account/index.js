import React, { useState, useEffect, useParams } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Link } from 'react-router-dom';
import './Account.css';
import config from '~/config';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faUserLarge } from '@fortawesome/free-solid-svg-icons';
import { FaSignOutAlt, FaHeart, FaWpforms } from 'react-icons/fa';
import swal from 'sweetalert';
import axios from 'axios';
import ManageAccount from '~/layouts/components/ManageAccount';

function Account() {

   function update() {
      document.getElementById('updatefullname').classList.remove('disnone');
   }
   function updateaddr() {
      document.getElementById('updateaddr').classList.remove('disnone');
   }

   const account = [
      {
         id: 1,
         first_name: 'Đăng Khoa',
         last_name: 'Trần',
         phone: '0329048291',
         email: 'trandangkhoa6102001@gmail.com',
         created_at: 62678980000,
         point: 1000,
         rank: {
            id: 1,
            name: 'vàng',
         },
         user_address: {
            address: 'Kinh Dương Vuong, Đường số 6',
         },
      },
      
   ];
   const [accountInput, setAccount] = useState([account]);
   const handleInput = (e) => {
      e.persist();
      setAccount({ ...accountInput, [e.target.name]: e.target.value });
   };
   
   const updateAccountSubmit = (e) => {
      e.preventDefault();
      axios.get('/account').then((res) => {
         
      });
   };   
   return (
      <div className="account_container">
         <ManageAccount />
         {account.map((item) => {                   
            return (               
               <div className="account_detail col-right" key={item.id}>
                  <div className="form_group">
                     <label for="name" className="label_group">
                        Họ và tên
                     </label>
                     <div className="update">
                        <input
                           type="text"
                           disabled="true"
                           className="input_group form-control"
                           name="username"
                           value={item.last_name + ' ' + item.first_name}
                        />
                        <button onClick={update} id="updatename" className="btUpdate">
                           sửa
                        </button>
                     </div>
                     <input
                        type="text"
                        className="disnone input_group form-control update"
                        id="updatefullname"
                        name="updatename"
                        value={accountInput.updatename}
                        onChange={handleInput}
                     />
                  </div>
                  <div className="form_group">
                     <label for="phone" className="label_group">
                        Số điện thoại
                     </label>
                     <input type="number" disabled="true" className="input_group form-control" value={item.phone} />
                  </div>
                  <div className="form_group">
                     <label for="email" className="label_group">
                        Email
                     </label>
                     <input type="email" disabled="true" className="input_group form-control" value={item.email} />
                  </div>
                  <div className="form_group">
                     <label for="createdate" className="label_group">
                        Ngày tham gia
                     </label>
                     <input type="text" disabled="true" className="input_group form-control" value="2/9/2022" />
                  </div>
                  <div className="form_group">
                     <label for="rank" className="label_group">
                        Hạng thành viên
                     </label>
                     <input type="text" disabled="true" className="input_group form-control" value={item.rank.name} />
                  </div>
                  <div className="form_group">
                     <label for="point" className="label_group">
                        Điểm tích lũy
                     </label>
                     <input type="text" disabled="true" className="input_group form-control" value="1000" />
                  </div>
                  <div className="form_group">
                     <label for="address" className="label_group">
                        Địa chỉ mặc định
                     </label>
                     <div className="update">
                        <input
                           type="text"
                           disabled="true"
                           className="input_group form-control"
                           value={item.user_address.address}
                        />
                        <button onClick={updateaddr} id="updatename" className="btUpdate">
                           sửa
                        </button>
                     </div>

                     <input
                        type="text"
                        className="disnone input_group form-control update"
                        id="updateaddr"
                        onChange={handleInput}
                        name="updateaddress"
                        value={accountInput.updateaddress}
                     />
                  </div>
                  <div className="btn-form-update" onSubmit={updateAccountSubmit}>
                     Cập nhật thông tin
                  </div>
               </div>
            );
         })}
      </div>
   );
}

export default Account;
