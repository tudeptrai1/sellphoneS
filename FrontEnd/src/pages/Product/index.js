import axios from 'axios';
import classNames from 'classnames/bind';
import styles from './Product.module.scss';
import * as ReactDOM from 'react-dom';
import { useParams } from 'react-router-dom';
import { useState, useEffect } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import Tag from '~/components/Tag';
import Image from '~/components/Image';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';

// import required modules
import { FreeMode, Navigation, Thumbs } from 'swiper';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCheckCircle as circleChosen } from '@fortawesome/free-solid-svg-icons';
import { faCheckCircle as circleNoChosen } from '@fortawesome/free-regular-svg-icons';

const cx = classNames.bind(styles);
let colorList = [
   { name: 'black', value: '#000', onSell: 'true' },
   { name: 'yellow', value: '#f3ca20', onSell: 'true' },
   { name: 'green', value: '#3a6b35', onSell: 'true' },
   { name: 'purple', value: '#500472', onSell: 'true' },
   { name: 'red', value: '#d71b3b', onSell: 'true' },
];
function Product() {
   const params = useParams();
   const [thumbsSwiper, setThumbsSwiper] = useState(null);
   const [product, setProduct] = useState({
      brand: null,
      id: null,
      id_color: null,
      id_memory: null,
      price: null,
      discount: null,
      quantity: null,
      image1: null,
      image2: null,
      image3: null,
   });
   const [listColor, setListColor] = useState([]);
   const [color, setColor] = useState({ id: null, name: null, value: null, onSell: null });
   const [listMemory, setListMemory] = useState([]);
   const [memory, setMemory] = useState({ name: '', id: 1, onSell: false });

   const fetchDataColor = () => {
      setListColor([
         { id: 1, name: 'Đen', value: '000000', onSell: true },
         { id: 2, name: 'Vàng', value: 'f3ca20', onSell: true },
         { id: 3, name: 'Xanh lá', value: '3a6b35', onSell: false },
         { id: 4, name: 'Tím', value: '500472', onSell: true },
         { id: 5, name: 'Đỏ', value: 'd71b3b', onSell: true },
      ]);
   };
   const fetchDataMemory = () => {
      setListMemory([
         { name: '64GB', id: 1, onSell: 'false' },
         { name: '128GB', id: 2, onSell: 'true' },
         { name: '256GB', id: 3, onSell: 'false' },
         { name: '512GB', id: 4, onSell: 'true' },
         { name: '1TB', id: 5, onSell: 'false' },
         { name: '2TB', id: 6, onSell: 'true' },
      ]);
   };
   const fetchDataProduct = () => {
      var product = {
         brand: 'iPhone',
         id: 1,
         id_color: 1,
         id_memory: 1,
         price: 30000000,
         discount: 30,
         quantity: 100,
         image1: '/assets/images/products/1/1.png',
         image2: '/assets/images/products/1/2.png',
         image3: '/assets/images/products/1/3.png',
      };

      setProduct(product);
   };
   useEffect(() => {
      fetchDataColor();
      fetchDataMemory();
      fetchDataProduct();
      setColor(listColor.find((e) => e.id === product.id_color));
      setMemory(listMemory.find((e) => e.id === product.id_memory));
   }, []);
   const check = () => {
      if (
         product !== undefined &&
         listColor !== undefined &&
         listMemory !== undefined &&
         color !== undefined &&
         memory !== undefined
      )
         return true;
      return false;
   };
   const styleColor = (onSell, color) => {
      // if (onSell) {
      //    if (color === colorChosen.value) {
      //       return { backgroundColor: '#' + color, boxShadow: 'var(--box-shadow-thick)' };
      //    }
      //    return { backgroundColor: '#' + color };
      // }
      // return { display: 'none' };
   };
   const styleMemory = (onSell) => {
      // if (!onSell) return { display: 'none' };
   };
   const styleMemoryIcon = (name) => {
      // if (name !== chosenMemory) return { display: 'none' };
   };
   const handleChooseColor = (e) => {
      // console.log(colorChosen);
      // if (colorChosen.id !== null) {
      //    var old = ReactDOM.findDOMNode(document.getElementById(colorChosen.value));
      //    old.style.boxShadow = 'none';
      // }
      // colorChosen = colorList.find((c) => c.id === Number(e.target.dataset.id));
      // var newC = ReactDOM.findDOMNode(document.getElementById(colorChosen.value));
      // newC.style.boxShadow = 'var(--box-shadow-thick)';
   };
   const handleChooseMemory = (e) => {
      // var old = ReactDOM.findDOMNode(document.getElementById(chosenMemory));
      // old.style.display = 'none';
      // chosenMemory = e.target.dataset.key;
      // chosenMemoryId = Number(e.target.dataset.id);
      // var newM = ReactDOM.findDOMNode(document.getElementById(chosenMemory));
      // newM.style.display = '';
      // setProduct(handleShowPrice(colorChosen.id, chosenMemoryId));
   };
   const handleShowPrice = (idColor, idMemory) => {
      // listProduct.map((product) => {
      //    if (idColor === product.id_color && idMemory === product.id_memory) return product;
      // });
   };
   console.log('render product');

   return (
      <div className={cx('wrapper')}>
         <div className={cx('box-left')}>
            <div className={cx('box-detail')}>
               <p className={cx('status')}>{product.quantity}</p>
               <p className={cx('brand')}>{product.brand}</p>
               <h1>{product.brand + ' ' + memory.name}</h1>
               <p className={cx('description')}>{product.description}</p>
            </div>
            {/* <div className={cx('box-function')}>
               <div className={cx('color')}>
                  <p className={cx('title')}>Màu</p>
                  <ul>
                     {colorList.map((color) => (
                        <span
                           id={color.value}
                           data-key={color.value}
                           data-id={color.id}
                           key={color.value}
                           style={styleColor(color.onSell, color.value)}
                           onClick={handleChooseColor}
                        ></span>
                     ))}
                  </ul>
               </div>
               <div className={cx('memory')}>
                  <p className={cx('title')}>Dung lượng</p>
                  <ul>
                     {memoryList.map((memory) => (
                        <span
                           data-key={memory.name}
                           data-id={memory.id}
                           key={memory.name}
                           style={styleMemory(memory.onSell)}
                           onClick={handleChooseMemory}
                        >
                           <FontAwesomeIcon id={memory.name} icon={circleChosen} style={styleMemoryIcon(memory.name)} />{' '}
                           {memory.name}
                        </span>
                     ))}
                  </ul>
               </div>
               <p className={cx('price')}>Giá</p>
               <p id="priceProduct"></p>
            </div> */}
         </div>
         <div className={cx('box-right')}>
            {product.images !== undefined && (
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
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/1.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/2.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/3.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/4.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
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
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/1.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/2.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/3.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                        <SwiperSlide className={cx('swiperSlide')}>
                           <Image
                              src={process.env.PUBLIC_URL + '/assets/images/products/1/4.png'}
                              alt={product.description}
                              className={cx('img')}
                           />
                        </SwiperSlide>
                     </Swiper>
                  </div>
               </div>
            )}
         </div>
      </div>
   );
}

export default Product;
