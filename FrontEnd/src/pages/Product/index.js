import React, { useState } from 'react';
import { useNavigate, generatePath, Switch, Route, useHistory, useParams } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Product.css';
import addcart from './addcart.png';
import { Tabs, Tab } from 'react-bootstrap';
import { NumericFormat } from 'react-number-format';
import { Link } from 'react-router-dom';
import config from '~/config';
import axios from 'axios';
function Product() {
   const products = [
      {
         id: '1',
         title: 'iPhone 14 Pro Max 128GB ',
         src: ['/assets/images/products/1/1.jpg', '/assets/images/products/2/2.jpg', '/assets/images/products/3/3.jpg'],
         priceoriginal: 33990000,
         pricesell: 32490000,
         color: 'Trắng',
         memory: '128GB',
      },
      {
         id: '2',
         title: 'iPhone 14 Pro Max 256GB',
         src: ['/assets/images/products/2/2.jpg', '/assets/images/products/1/1.jpg', '/assets/images/products/3/3.jpg'],
         priceoriginal: 35990000,
         pricesell: 34490000,
         color: 'Xanh',
         memory: '256GB',
      },
      {
         id: '3',
         title: 'iPhone 14 Pro Max 64GB',
         src: ['/assets/images/products/3/3.jpg', '/assets/images/products/1/1.jpg', '/assets/images/products/3/3.jpg'],
         priceoriginal: 30990000,
         pricesell: 29490000,
         color: 'Xám',
         memory: '64GB',
      },
   ];

   const [quantity, setQuantity] = useState(1);
   const handleDecrement = () => {
      if (quantity > 1) {
         setQuantity((prevCount) => prevCount - 1);
      }
   };
   const handleIncrement = () => {
      if (quantity < 5) {
         setQuantity((prevCount) => prevCount + 1);
      }
   };
   const history = useNavigate();
   const submitAddtocart = (e) => {
      e.preventDefault();
      const data = {
         product_id: products.id,
         products_qty: quantity,
      };
      axios.post('/api/add-to-cart').then((res) => {});
   };

   const { id } = useParams();
   const thisProduct = products.find((prod) => prod.id === id);
   const productmap = products.map((product) => {
      return (
         <Link key={products.id} to={`/product/${product.id}`} className="link">
            <div className="product_category_memory">{product.memory}</div>
            <span className="product_category_memory_price">{product.pricesell}</span>
         </Link>
      );
   });
   const productcolor = products.map((product) => {
      return (
         <Link className="list_color">
            <div className="list_product_detail">
               <div className="list_product_color">{product.color}</div>
               <span className="list_product_price">{thisProduct.pricesell}</span>
            </div>
         </Link>
      );
   });
   return (
      <div className="container_product_detail">
         <div className="product_img contain_item">
            <div className="product_img_main">
               <img src={thisProduct.src[0]} alt="product image" className="main_img" />
            </div>
            <div className="product_img_sub_contain">
               {thisProduct.src.map((img) => (
                  <div className="product_img_sub">
                     <img src={img} alt="color1" className="sub_img" />
                  </div>
               ))}
            </div>
         </div>

         <div className="product_content contain_item">
            <div className="content_1">
               <div className="product_name">
                  <h1>{thisProduct.title}</h1>
               </div>
               <div className="product_price">
                  <p className="product_price_sell">
                     <NumericFormat
                        value={thisProduct.pricesell}
                        displayType={'text'}
                        thousandSeparator={true}
                        suffix={'VND'}
                     />
                  </p>
                  <p className="product_price_original">
                     <NumericFormat
                        value={thisProduct.priceoriginal}
                        displayType={'text'}
                        thousandSeparator={true}
                        suffix={'VND'}
                     />
                  </p>
               </div>
               <div className="product_list_link">{productmap}</div>

               <div className="box-color">{productcolor}</div>
               <div className="quantity_product">
                  <p>Chọn số lượng</p>
                  <div className="amount">
                     <button type="button" onClick={handleDecrement} className="input_group_text">
                        -
                     </button>
                     <div className="text-center">{quantity}</div>
                     <button type="button" onClick={handleIncrement} className="input_group_text">
                        +
                     </button>
                  </div>
               </div>
            </div>
            <div className="content_2">
               <button className="btn_buynow">MUA NGAY</button>
               <button type="button" onClick={submitAddtocart} className="btn_addcart">
                  <img src={addcart} alt="addcart" className="icon_addcart" />
                  <span>Thêm vào giỏ</span>
               </button>
            </div>
         </div>

         <div className="product_configuration contain_item">
            <h2>Thông số kỹ thuật</h2>
            <ul>
               <li className="technical_content_item">
                  <p className="name_item">Kích thước màn hình</p>
                  <div className="value_item">6.7 inches</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Pin</p>
                  <div className="value_item">4.352 mAh</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Hệ điều hành</p>
                  <div className="value_item">iOS 16</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Dung lượng RAM</p>
                  <div className="value_item">6 GB</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Bộ nhớ trong</p>
                  <div className="value_item">128GB</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Thẻ SIM</p>
                  <div className="value_item">2 SIM</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Chipset</p>
                  <div className="value_item">Apple A16 Bionic 6-core</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Cổng sạc</p>
                  <div className="value_item">Lightning</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">Trọng lượng</p>
                  <div className="value_item">240 gr</div>
               </li>
               <li className="technical_content_item">
                  <p className="name_item">GPU</p>
                  <div className="value_item">Apple GPU (5-core graphics)</div>
               </li>
            </ul>
         </div>
      </div>
   );
}

export default Product;
