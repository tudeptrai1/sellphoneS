import axios from 'axios';
import classNames from 'classnames/bind';
import styles from './Product.module.scss';
import * as ReactDOM from 'react-dom';

import { useSelector, useDispatch } from 'react-redux';

import { useParams } from 'react-router-dom';
import { useState, useEffect, memo, useRef } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import toast, { Toaster } from 'react-hot-toast';
import { updateProduct } from '~/redux/productSlice';
import { formatCurrency } from '~/utils/format';
import Tag from '~/components/Tag';
import Image from '~/components/Image';
import * as cartService from '~/services/cartService';
import { setAmountCart, addToCart } from '~/redux/generalInfoSlice';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';

// import required modules
import { FreeMode, Navigation, Thumbs } from 'swiper';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {
   faCartPlus,
   faCheckCircle as circleChosen,
   faDeleteLeft,
   faGift,
   faMinusSquare,
   faPlusSquare,
   faXmarkCircle,
} from '@fortawesome/free-solid-svg-icons';
import { faCircleXmark } from '@fortawesome/free-regular-svg-icons';

const cx = classNames.bind(styles);

function ProductDetail() {
   const params = useParams();
   const dispatch = useDispatch();
   const product = useSelector((state) => state.product);
   const [amount, setAmount] = useState(1);
   const inputRef = useRef();
   const [thumbsSwiper, setThumbsSwiper] = useState(null);
   let chosenProduct;
   let color;
   let memory;
   const generalInfo = useSelector((state) => state.generalInfo);
   const styleColor = (value, id) => {
      if (id === product.color_id) {
         return { backgroundColor: '#' + value, boxShadow: 'var(--box-shadow-thick)' };
      }
      return { backgroundColor: '#' + value };
   };
   const styleMemory = (status) => {
      // if (!status) return { display: 'none' };
   };
   const styleMemoryIcon = (name) => {
      if (memory === undefined) memory = product.listMemory.find((c) => c.id === product.memory_id);
      if (name !== memory.value) return { display: 'none' };
   };
   const handleChooseColor = (e) => {
      var temp = product.listProduct.filter(
         (p) => p.color_id === Number(e.target.dataset.id) && p.memory_id === product.memory_id,
      );
      if (Object.keys(temp).length !== 0) {
         color = product.listColor.find((c) => c.id === product.color_id);
         var old = ReactDOM.findDOMNode(document.getElementById(color.value));
         old.style.boxShadow = 'none';
         color = product.listColor.find((c) => c.id === Number(e.target.dataset.id));
         var newC = ReactDOM.findDOMNode(document.getElementById(color.value));
         newC.style.boxShadow = 'var(--box-shadow-thick)';
         // handleShowInformation();
         // console.log(temp[0]);
         temp[0].id !== product.id && dispatch(updateProduct({ product: temp[0] }));
      } else {
         notify('Sản phẩm hết hàng');
      }
   };
   const handleChooseMemory = (e) => {
      var temp = product.listProduct.filter(
         (p) => p.memory_id === Number(e.target.dataset.id) && p.color_id === product.color_id,
      );
      if (Object.keys(temp).length !== 0) {
         memory = product.listMemory.find((m) => m.id === product.memory_id);
         var old = ReactDOM.findDOMNode(document.getElementById(memory.value));
         old.style.display = 'none';
         memory = product.listMemory.find((m) => m.id === Number(e.target.dataset.id));
         var newM = ReactDOM.findDOMNode(document.getElementById(memory.value));
         newM.style.display = '';
         // handleShowInformation();
         temp[0].id !== product.id && dispatch(updateProduct({ product: temp[0] }));
      } else {
         notify('Sản phẩm hết hàng');
      }
   };
   const handleMinus = () => {
      amount > 1 && setAmount((prevState) => prevState - 1);
   };
   const handlePlus = () => {
      setAmount((prevState) => prevState + 1);
   };
   const handleReset = () => {
      amount !== 1 && setAmount(1);
   };
   const handleClick = async () => {
      const res = await cartService.add(generalInfo.user.id, product.id);
      dispatch(setAmountCart({ amount: Number(generalInfo.amountCart) + 1 }));
      toast.remove();
      if (generalInfo.listCart !== null) {
         dispatch(addToCart({ product: product }));
      }
      toast.success('Thêm thành công');
   };
   const notify = (text) => toast.error(text);
   return (
      <div className={cx('wrapper')}>
         <Toaster position="top-right" reverseOrder={false} />
         <div className={cx('box-main')}>
            <div className={cx('box-left')}>
               <div className={cx('box-detail')}>
                  <p className={cx('status')}>{product.amount > 0 ? 'Còn hàng' : 'Hết hàng'}</p>
                  {/* <p className={cx('brand')}>{product.brand.name}</p> */}
                  <h1 id="nameProduct">{product.name}</h1>
                  <p className={cx('description')}>{product.name}</p>
               </div>
               <div className={cx('box-function')}>
                  <div className={cx('color')}>
                     <p className={cx('title')}>Màu</p>
                     <ul>
                        {product.listColor.map((color) => (
                           <span
                              id={color.value}
                              data-key={color.value}
                              data-id={color.id}
                              key={color.value}
                              style={styleColor(color.value, color.id)}
                              onClick={handleChooseColor}
                           ></span>
                        ))}
                     </ul>
                  </div>
                  <div className={cx('memory')}>
                     <p className={cx('title')}>Dung lượng</p>
                     <ul>
                        {product.listMemory.map((memory) => (
                           <span
                              data-key={memory.value}
                              data-id={memory.id}
                              key={memory.value}
                              style={styleMemory(memory.id)}
                              onClick={handleChooseMemory}
                           >
                              <FontAwesomeIcon
                                 id={memory.value}
                                 icon={circleChosen}
                                 style={styleMemoryIcon(memory.value)}
                              />{' '}
                              {memory.value}
                           </span>
                        ))}
                     </ul>
                  </div>

                  <p className={cx('price')}>Giá</p>
                  <div className={cx('priceValue')}>
                     <p className={cx('priceDiscount')} id="priceDiscount">
                        {formatCurrency(
                           product.discount !== null
                              ? (amount * ((100 - product.discount.discount_value) * product.sell_price)) / 100
                              : amount * product.sell_price,
                           '₫',
                        )}
                     </p>
                     {product.discount !== null && (
                        <p className={cx('priceProduct')} id="priceProduct">
                           {formatCurrency(amount * product.sell_price, '₫')}
                        </p>
                     )}
                  </div>
                  {product.discount !== null && (
                     <div className={cx('discount')}>
                        <div className={cx('title')}>
                           <FontAwesomeIcon icon={faGift} className={cx('icon')} /> {'Khuyến mãi'}
                        </div>
                        <p className={cx('content')}>{product.discount !== null && product.discount.description}</p>
                     </div>
                  )}
                  <div className={cx('button')}>
                     {/* <p className={cx('title')}>Số lượng</p> */}
                     <div className={cx('function')}>
                        {/* <div className={cx('amount-function')}> */}
                        {/* <FontAwesomeIcon icon={faMinusSquare} className={cx('icon')} onClick={handleMinus} />
                           <input
                              onChange={() => {}}
                              ref={inputRef}
                              className={cx('amount')}
                              type="number"
                              value={amount}
                              style={{ width: inputRef.current ? inputRef.current.value.length + 'ch' : 'auto' }}
                           />
                           <FontAwesomeIcon icon={faPlusSquare} className={cx('icon')} onClick={handlePlus} />
                           <FontAwesomeIcon icon={faCircleXmark} className={cx('icon')} onClick={handleReset} />
                        </div> */}
                        <div className={cx('addToCart')} onClick={handleClick}>
                           Thêm vào giỏ hàng
                           <FontAwesomeIcon icon={faCartPlus} className={cx('icon')} />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div className={cx('box-right')}>
               <div className={cx('box-gallery')}>
                  <div className={cx('swiperShow')}>
                     <Swiper
                        style={{
                           '--swiper-navigation-color': '#000',
                           '--swiper-pagination-color': '#fff',
                           height: '100%',
                        }}
                        loop={true}
                        spaceBetween={10}
                        navigation={true}
                        thumbs={{ swiper: thumbsSwiper }}
                        modules={[FreeMode, Navigation, Thumbs]}
                     >
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[0]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[1]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[2]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[3]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                     </Swiper>
                  </div>
                  <div className={cx('swiperThumbnail')}>
                     <Swiper
                        style={{
                           height: '100%',
                        }}
                        onSwiper={setThumbsSwiper}
                        loop={true}
                        spaceBetween={0}
                        slidesPerView={4}
                        slidesPerGroup={1}
                        freeMode={true}
                        watchSlidesProgress={true}
                        modules={[FreeMode, Navigation, Thumbs]}
                     >
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[0]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[1]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[2]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image src={product.images[3]} alt={product.description} className={cx('img')} />
                        </SwiperSlide>
                     </Swiper>
                  </div>
               </div>
            </div>
         </div>
         <div className={cx('box-information')}>
            <table>
               <thead>
                  <tr>
                     <th>Thông số kỹ thuật</th>
                     <th>Giá trị</th>
                  </tr>
               </thead>
               <tbody>
                  {product.tech_specs.map((tech, index) => (
                     <tr key={index} className={cx('tech')}>
                        <td>{tech.name}</td>
                        <td>{tech.value}</td>
                     </tr>
                  ))}
               </tbody>
            </table>
         </div>
      </div>
   );
}

export default memo(ProductDetail);
