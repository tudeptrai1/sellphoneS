import { memo, useState } from 'react';
import classNames from 'classnames/bind';
import Image from '~/components/Image';
import { NumericFormat } from 'react-number-format';

import styles from './Summary.module.scss';
import Tag from '~/components/Tag';
const cx = classNames.bind(styles);
function Summary() {
   const [productList, setProductList] = useState([
      {
         id: 1,
         name: 'iPhone 10',
         image: '/assets/images/products/1/1.jpg',
         price: 21000000,
         brand: 'Apple',
         discount: 0,
         quantity: 1,
      },
      {
         id: 2,
         name: 'iPhone 11',
         image: '/assets/images/products/2/2.jpg',
         price: 22000000,
         brand: 'Apple',
         discount: 1000000,
         quantity: 1,
      },
      {
         id: 3,
         name: 'iPhone 12',
         image: '/assets/images/products/3/3.jpg',
         price: 23000000,
         brand: 'Apple',
         discount: 2000000,
         quantity: 1,
      },
      {
         id: 4,
         name: 'iPhone 13',
         image: '/assets/images/products/4/4.jpg',
         price: 24000000,
         brand: 'Apple',
         discount: 1300000,
         quantity: 1,
      },
      {
         id: 5,
         name: 'iPhone 14',
         image: '/assets/images/products/5/5.jpg',
         price: 25000000,
         brand: 'Apple',
         discount: 1400000,
         quantity: 1,
      },
      {
         id: 6,
         name: 'iPhone 15',
         image: '/assets/images/products/6/6.jpg',
         price: 26000000,
         brand: 'Apple',
         discount: 1500000,
         quantity: 1,
      },
      {
         id: 7,
         name: 'iPhone 16',
         image: '/assets/images/products/7/7.jpg',
         price: 27000000,
         brand: 'Apple',
         discount: 1600000,
         quantity: 1,
      },
      {
         id: 8,
         name: 'iPhone 17',
         image: '/assets/images/products/8/8.jpg',
         price: 28000000,
         brand: 'Apple',
         discount: 1700000,
         quantity: 1,
      },
      {
         id: 11,
         name: 'iPhone 10',
         image: '/assets/images/products/1/1.jpg',
         price: 21000000,
         brand: 'Apple',
         discount: 0,
         quantity: 1,
      },
      {
         id: 12,
         name: 'iPhone 11',
         image: '/assets/images/products/2/2.jpg',
         price: 22000000,
         brand: 'Apple',
         discount: 1000000,
         quantity: 1,
      },
      {
         id: 13,
         name: 'iPhone 12',
         image: '/assets/images/products/3/3.jpg',
         price: 23000000,
         brand: 'Apple',
         discount: 2000000,
         quantity: 1,
      },
      {
         id: 14,
         name: 'iPhone 13',
         image: '/assets/images/products/4/4.jpg',
         price: 24000000,
         brand: 'Apple',
         discount: 1300000,
         quantity: 1,
      },
      {
         id: 15,
         name: 'iPhone 14',
         image: '/assets/images/products/5/5.jpg',
         price: 25000000,
         brand: 'Apple',
         discount: 1400000,
         quantity: 1,
      },
      {
         id: 16,
         name: 'iPhone 15',
         image: '/assets/images/products/6/6.jpg',
         price: 26000000,
         brand: 'Apple',
         discount: 1500000,
         quantity: 1,
      },
      {
         id: 17,
         name: 'iPhone 16',
         image: '/assets/images/products/7/7.jpg',
         price: 27000000,
         brand: 'Apple',
         discount: 1600000,
         quantity: 1,
      },
      {
         id: 18,
         name: 'iPhone 17',
         image: '/assets/images/products/8/8.jpg',
         price: 28000000,
         brand: 'Apple',
         discount: 1700000,
         quantity: 1,
      },
   ]);
   console.log('re-render summary');
   return (
      <div className={cx('wrapper')}>
         <div className={cx('title')}>CHI TIẾT ĐƠN HÀNG</div>
         <div className={cx('total')}>
            <div className={cx('price-products')}>
               Tổng tiền sản phẩm <p>aa</p>
            </div>
            <div className={cx('quantity-products')}>
               Số lượng sản phẩm <p>aa</p>
            </div>
            <div className={cx('price-promo')}>
               Khuyến mãi <p>aa</p>
            </div>
            <div className={cx('price-delivery')}>
               Giao hàng <p>aa</p>
            </div>
            <div className={cx('price-total')}>
               Tổng thanh toán <p>aa</p>
            </div>
         </div>
         <div className={cx('detail')}>
            {productList.map((product) => (
               <div key={product.id} className={cx('detail-wrapper')}>
                  <Image src={process.env.PUBLIC_URL + product.image} alt={product.name} className={cx('img')} />
                  <div className={cx('detail-info')}>
                     <div className={cx('detail-name')}>
                        <p className={cx('name')}>{product.name}</p>
                        <Tag name={product.brand} className={cx('tag')} />
                     </div>
                     <div className={cx('price')}>
                        <NumericFormat
                           className={cx('price-original')}
                           value={product.price}
                           decimalScale={3}
                           thousandSeparator=","
                           suffix={'VND'}
                           disabled
                        />
                        {product.discount > 0 && (
                           <NumericFormat
                              className={cx('discount')}
                              value={-product.discount}
                              decimalScale={3}
                              thousandSeparator=","
                              suffix={'VND'}
                              disabled
                           />
                        )}
                     </div>
                     <div className={cx('quantity')}>
                        <p>Số lượng: {product.quantity}</p>
                     </div>

                     <NumericFormat
                        className={cx('price-total')}
                        value={product.price - product.discount}
                        decimalScale={3}
                        thousandSeparator=","
                        suffix={'VND'}
                        disabled
                     />
                  </div>
               </div>
            ))}
         </div>
      </div>
   );
}

export default memo(Summary);
