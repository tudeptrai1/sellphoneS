import axios from 'axios';
import classNames from 'classnames/bind';
import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';
import { NumericFormat } from 'react-number-format';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHeart as faHeartRegular } from '@fortawesome/free-regular-svg-icons';
import Image from '~/components/Image';
import styles from './FeaturedProductItem.module.scss';
import icons from '~/assets/icons';

const cx = classNames.bind(styles);
function FeaturedProductItem({ product }) {
   return (
      <Link to={`/product/${product.id}`} className={cx('wrapper')}>
         <div className={cx('container')}>
            {Number(product.discountPercentage) > 0 && (
               <div className={cx('discountPercent')}>
                  <Image src={icons.tagDiscount} className={cx('icon')} />
                  <div className={cx('detail')}>
                     Giảm
                     <NumericFormat
                        className={cx('percent')}
                        value={product.discountPercentage}
                        decimalScale={0}
                        suffix={'%'}
                     />
                  </div>
               </div>
            )}
            <Image src={product.images[0]} alt={product.description} className={cx('img')} />

            {/* <Image src={process.env.PUBLIC_URL + product.image} alt={product.description} className={cx('img')} /> */}
            <p className={cx('name')}>{product.title}</p>
            <div className={cx('price')}>
               {Number(product.discountPercentage) > 0 && (
                  <NumericFormat
                     className={cx('originalPrice')}
                     value={product.price * 23000}
                     decimalScale={0}
                     thousandSeparator=","
                     suffix={'VND'}
                  />
               )}
               <NumericFormat
                  className={cx('discountPrice')}
                  value={product.price * 23000 * (1 - product.discountPercentage / 100)}
                  decimalScale={0}
                  thousandSeparator=","
                  suffix={'VND'}
               />
            </div>
            <div className={cx('info')}>
               <p>Tặng kèm cáp sạc</p>
            </div>
            <div className={cx('function')}>
               <div className={cx('wishlist')}>
                  Yêu thích
                  <FontAwesomeIcon icon={faHeartRegular} className={cx('icon')} />
               </div>
               <div className={cx('cart')}>
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
