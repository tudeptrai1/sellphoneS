import classNames from 'classnames/bind';
import styles from './Catalog.module.scss';
const cx = classNames.bind(styles);
function Catalog() {
   return (
      <div className={cx('wrapper')}>
         <div className={cx('top-banner')}>Banner</div>

         <div className={cx('brand')}></div>

         <div className={cx('block-filter-sort')}>
            <div className={cx('block-filter-sort-item')}></div>
         </div>
      </div>
   );
}

export default Catalog;
