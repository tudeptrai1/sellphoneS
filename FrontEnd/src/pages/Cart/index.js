import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Cart.css';
import { NumericFormat } from 'react-number-format';
import { Link } from 'react-router-dom';
import config from '~/config';
import axios from 'axios';
import swal from 'sweetalert';

function Cart() {
   const cartitem = [
      {
         id: '1',
         title: 'iphone 12 pro max 128GB',
         src: '/assets/images/products/1/1.jpg',
         color: 'Xanh',
         pricesell: 10000000,
         priceoriginal: 12000000,
         product_qty: 2,
      },
      {
         id: '2',
         title: 'iphone 13 pro max 64GB',
         src: '/assets/images/products/2/2.jpg',
         color: 'Trắng',
         pricesell: 150000000,
         priceoriginal: 16000000,
         product_qty: 4,
      },
   ];
   var totalCartPrice = 0;
   const [cart, setCart] = useState([...cartitem]);
   var cart_HTML = '';
   if(cart.length > 0)
   {
      cart_HTML = <div className="cart">
          {cart.map((item) => {
            totalCartPrice += item.pricesell * item.product_qty;
            return (
               <tr className="cart_item">
                  <div className="cart_item_img">
                     <img src={item.src} alt="color1" className="img" />
                  </div>
                  <div className="cart_item_info">
                     <div className="cart_item_title">
                        {item.title}-{item.color}
                     </div>
                     <div className="price">
                        <p className="price_sell">
                           <NumericFormat
                              value={item.pricesell}
                              displayType={'text'}
                              thousandSeparator={true}
                              suffix={'VND'}
                           />
                        </p>
                        <p className="price_original">
                           <NumericFormat
                              value={item.priceoriginal}
                              displayType={'text'}
                              thousandSeparator={true}
                              suffix={'VND'}
                           />
                        </p>
                     </div>
                  </div>
                  <div className="quantity">
                     <p>Chọn số lượng</p>
                     <div className="amount_product">
                        <button type="button" onClick={() => handleDecrement(item.id)} className="input_group_text">
                           -
                        </button>
                        <span className="text-center">{item.product_qty}</span>
                        <button type="button" onClick={() => handleIncrement(item.id)} className="input_group_text">
                           +
                        </button>
                     </div>
                  </div>
                  <div className="price_item">
                     <p className="price_sell">
                        <NumericFormat
                           value={item.pricesell * item.product_qty}
                           displayType={'text'}
                           thousandSeparator={true}
                           suffix={'VND'}
                        />
                     </p>
                  </div>
                  <div className="remove_item">
                     <button type="button" onClick={(e) => deleteCartItem(e, item.id)} className="btn_remove">
                        Xóa sản phẩm
                     </button>
                  </div>
               </tr>
            );
         })}
         <div className="calculate_price">
            <div className="total">
               <p>Tổng tiền tạm tính:</p>
               <div className="total_price">
                  <NumericFormat value={totalCartPrice} displayType={'text'} thousandSeparator={true} suffix={'VND'} />
               </div>
            </div>
            <div className="boxbtn btn1">
               <button className="btn_dathang">TIẾN HÀNH ĐẶT HÀNG</button>
            </div>
            <div className="boxbtn btn2">
               <Link to={config.routes.home} className="btnlink">
                  CHỌN THÊM SẢN PHẨM KHÁC
               </Link>
            </div>
         </div>
      </div>
   }else{
      cart_HTML = <div >
         <div className="card_empty">
            <h4>Không có sản phẩm nào trong giỏ hàng</h4>
         </div>
         <div className="boxbtn btn2 home">
               <Link to={config.routes.home} className="btnlink">
                  QUAY LẠI TRANG CHỦ
               </Link>
            </div>
      </div>
   }
   const handleDecrement = (card_id) => {
      setCart((cartitem) =>
         cartitem.map((item) =>
            card_id === item.id ? { ...item, product_qty: item.product_qty - (item.product_qty > 1 ? 1 : 0) } : item,
         ),
      );
   };
   const handleIncrement = (card_id) => {
      setCart((cartitem) =>
         cartitem.map((item) =>
            card_id === item.id ? { ...item, product_qty: item.product_qty + (item.product_qty < 5 ? 1 : 0) } : item,
         ),
      );
   };
   const deleteCartItem = (e, cart_id) => {
      e.preventDefault();
      const thisClicked = e.currentTarget;
      thisClicked.innerText = 'Removing';
      swal('Success', "delete success", 'success');
      thisClicked.closest('tr').remove();
      //thisClicked.closest('tr').remove();
      // axios.delete(`/api/delete-cartitem/${cart_id}`).then((res) => {
      //    if (res.data.status === 200) {
      //       swal('Success', res.data.message, 'success');
      //       thisClicked.closest('tr').remove();
      //    } else if (res.data.status === 400){
      //       swal('Error', res.data.message, 'error');
      //       thisClicked.innerText = 'Xóa sản phẩm';
      //    }
      // });
   };
   return (
      <div className="container_cart">
         <div className="title_cart">
            <p>Giỏ hàng</p>
         </div>
         {cart_HTML}         
      </div>
   );
}

export default Cart;
