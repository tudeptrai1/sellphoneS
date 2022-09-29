import classNames from 'classnames/bind';
import styles from './SearchResultItem.module.scss';
const cx = classNames.bind(styles);
function SearchResultItem() {
   return (
      <div className={cx('wrapper')}>
         <img
            className={cx('thumbnail')}
            src="https://image.cellphones.com.vn/200x/media/catalog/product/i/p/ip13-pro_2.jpg"
            alt="thumbnail"
         />
         <div className={cx('info')}>
            <p className={cx('name')}>iPhone 12 Pro Max 128GB</p>
            <span className={cx('price')}>17.900.000</span>
         </div>
      </div>
   );
}

export default SearchResultItem;
