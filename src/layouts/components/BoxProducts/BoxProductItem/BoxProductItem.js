import PropTypes from 'prop-types';
import { NumericFormat } from 'react-number-format';
import Image from '~/components/Image';
import classNames from 'classnames/bind';
import styles from './BoxProductItem.module.scss';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import icons from '~/assets/icons';

import { faHeart as faHeartRegular } from '@fortawesome/free-regular-svg-icons';

const cx = classNames.bind(styles);
function BoxProductItem({ id, name, price, image, discount }) {
   return (
      <div className={cx('wrapper')}>
         {discount > 0 && (
            <div className={cx('discountPercent')}>
               <Image src={icons.tagDiscount} className={cx('icon')} />
               <div className={cx('detail')}>
                  Giảm
                  <NumericFormat
                     className={cx('percent')}
                     value={(discount * 100) / price}
                     decimalScale={0}
                     suffix={'%'}
                  />
               </div>
            </div>
         )}

         <Image src={process.env.PUBLIC_URL + image} alt={name} className={cx('img')} />
         <p className={cx('name')}>{name}</p>
         <div className={cx('price')}>
            <NumericFormat
               className={cx('discountPrice')}
               value={price - discount}
               decimalScale={3}
               thousandSeparator=","
               suffix={'VND'}
            />
            {discount > 0 && (
               <NumericFormat
                  className={cx('originalPrice')}
                  value={price}
                  decimalScale={3}
                  thousandSeparator=","
                  suffix={'VND'}
               />
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
            <div className={cx('cart')}>
               <p>ADD TO CART</p>
            </div>
         </div>
      </div>
   );
}
BoxProductItem.propTypes = {
   id: PropTypes.string,
   image: PropTypes.string,
   name: PropTypes.string,
   price: PropTypes.number,
   discount: PropTypes.number,
};
export default BoxProductItem;
