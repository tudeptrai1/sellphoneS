import { NumericFormat } from 'react-number-format';
import Image from '~/components/Image';
import classNames from 'classnames/bind';
import styles from './FeaturedProductItem.module.scss';
const cx = classNames.bind(styles);
function FeaturedProductItem({ id, name, price, image, discount }) {
   return (
      <div className={cx('wrapper')}>
         <Image src={process.env.PUBLIC_URL + image} alt={'~' + image} className="img" />
         <p className={cx('name')}>{name}</p>
         <div className={cx('price')}>
            {discount > 0 && (
               <NumericFormat
                  className={cx('originalPrice')}
                  value={price}
                  decimalScale={3}
                  thousandsGroupStyle="thousandSeparator"
                  thousandSeparator=","
                  suffix={'VND'}
               />
            )}
            <NumericFormat
               className={cx('discountPrice')}
               value={price - discount}
               decimalScale={3}
               thousandsGroupStyle="thousandSeparator"
               thousandSeparator=","
               suffix={'VND'}
            />
         </div>
      </div>
   );
}

export default FeaturedProductItem;
