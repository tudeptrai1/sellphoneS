import axios from 'axios';
import classNames from 'classnames/bind';
import PropTypes from 'prop-types';
import LazyLoad from 'react-lazyload';
import { useSelector, useDispatch } from 'react-redux';
import { Link } from 'react-router-dom';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHeart as faHeartRegular } from '@fortawesome/free-regular-svg-icons';
import { addToOrder } from '~/redux/orderSlice';
import { formatCurrency } from '~/utils/format';
import icons from '~/assets/icons';
import Image from '~/components/Image';
import styles from './FeaturedProductItem.module.scss';

const cx = classNames.bind(styles);
function FeaturedProductItem({ product, status }) {
   const dispatch = useDispatch();

   const handleClick = () => {
      // dispatch(addToOrder({ product: product }));
      // console.log('click');
   };
   const Loading = () => (
      <div className={cx('loading')}>
         <p>Đang tải...</p>
      </div>
   );

   return (
      <Link to={`/product/${product.id}`} className={cx('wrapper')}>
         <div className={cx('container')}>
            <div
               style={{ visibility: product.discount !== null ? 'visible' : 'hidden' }}
               className={cx('discountPercent')}
            >
               <Image src={icons.tagDiscount} className={cx('icon')} />
               <div className={cx('detail')}>
                  Giảm
                  <p className={cx('percent')}>
                     {formatCurrency(product.discount !== null ? product.discount.discount_value : 0, '%')}
                  </p>
               </div>
            </div>

            <LazyLoad once={true} placeholder={<Loading />} className={cx('img')}>
               <Image src={process.env.PUBLIC_URL + product.images[0]} alt={product.name} />
            </LazyLoad>
            <p className={cx('name')}>{product.name}</p>
            <div className={cx('price')}>
               {product.discount !== null && (
                  <p className={cx('originalPrice')}>{formatCurrency(product.sell_price, '₫')}</p>
               )}
               {product.discount !== null ? (
                  <p className={cx('discountPrice')}>
                     {formatCurrency((product.sell_price / 100) * (100 - product.discount.discount_value), '₫')}
                  </p>
               ) : (
                  <p style={{ textAlignLast: 'center' }} className={cx('discountPrice')}>
                     {formatCurrency(product.sell_price, '₫')}
                  </p>
               )}
            </div>
            <div className={cx('info')}>
               <p>Tặng kèm cáp sạc</p>
            </div>
            <div className={cx('function')}>
               <div className={cx('wishlist')}>
                  Yêu thích
                  <FontAwesomeIcon icon={faHeartRegular} className={cx('icon')} />
               </div>
               <div className={cx('cart')} onClick={handleClick}>
                  <p>ADD TO CART</p>
               </div>
            </div>
         </div>
      </Link>
   );
}
FeaturedProductItem.propTypes = {
   product: PropTypes.object,
};
export default FeaturedProductItem;
