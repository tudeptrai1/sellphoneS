import classNames from 'classnames/bind';
import styles from './FeaturedProduct.module.scss';
const cx = classNames.bind(styles);
function FeaturedProductItem({ name, price, img, discount }) {
   return (
      <div className={cx('wrapper')}>
         <p>a</p>
      </div>
   );
}

export default FeaturedProductItem;
