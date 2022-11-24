import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Link } from 'react-router-dom';
import './OrderDetail.css';
import config from '~/config';
import swal from 'sweetalert';
import axios from 'axios';
import item from "./1.jpg"
import ManageAccount from '~/layouts/components/ManageAccount';
function OrderDetail() {
   const OrderDetailItem = [
      {
         id: '1',
         price: 30000000,
         quantity: 2,         
         img: './1.jpg',
         productname: 'iphone 12 pro max 128GB',
         color: 'Xanh',   
      }
   ];
   return(
      <div className="oderdetail_container">
          <ManageAccount />
          <div className="orderdetail col-right">
             <div className="order_item">
                <div className="order_title">
                   Đơn hàng #1 đặt vào ngày 11/21/20222 trạng thái đã hoàn thành  
                </div>
                <div className="title_item">
                  <span className="title_product">Sản phẩm</span>
                  <span className="title_name">Tên sản phẩm</span>
                  <span className="title_price">Đơn giá</span>
                  <span className="title_quantity">Số lượng</span>                 
                  <span className="title_sub">Thành tiền</span>
                </div>
                <div className="container_item_detail">
                     <div className="item">
                        <div className="contain_img">
                           <img src={item} alt="img-item" className="item_img"/>
                        </div>
                        <div className="product_name">iphone 12 pro max 128GB-Xanh</div>                        
                        <div className="price_product">30.000.000VND</div>
                        <div className="quantity_item">x2</div>
                        <div className="price_sub">60.000.000VND</div>
                     </div>
                     <div className="item">
                        <div className="contain_img">
                           <img src={item} alt="img-item" className="item_img"/>
                        </div>
                        <div className="product_name">iphone 12 pro max 128GB-Xanh</div>                        
                        <div className="price_product">30.000.000VND</div>
                        <div className="quantity_item">x2</div>
                        <div className="price_sub">60.000.000VND</div>
                     </div>
                </div>
                <span  className="total">
                     Tổng tiền: 40.000.000 VND
                </span>
             </div>            
          </div>
      </div>
   );
}

export default OrderDetail;
