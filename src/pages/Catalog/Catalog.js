import classNames from 'classnames/bind';
import Filter from '~/layouts/components/Filter';
import TagList from '~/layouts/components/TagList';
import styles from './Catalog.module.scss';
const cx = classNames.bind(styles);

const typeList = [
   { name: 'iPhone', code: '1' },
   { name: 'Samsung', code: '2' },
   { name: 'Oppo', code: '3' },
   { name: 'Vivo', code: '4' },
   { name: 'Xiaomi', code: '5' },
   { name: 'Nokia', code: '6' },
   { name: 'OnePlus', code: '7' },
   { name: 'Realme', code: '8' },
];
const phoneList = [];
function Catalog() {
   console.log('render catalog');
   return (
      <div className={cx('wrapper')}>
         <div className={cx('top-banner')}>Banner</div>

         <div className={cx('brand')}>
            <TagList productShow={true} brandShow={true} productList={phoneList} brandList={typeList} />
         </div>

         <div className={cx('block-filter-sort')}>
            <Filter />
         </div>
      </div>
   );
}

export default Catalog;
