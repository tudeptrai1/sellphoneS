import classNames from 'classnames/bind';
import Tag from '~/components/Tag';
import styles from './SearchTag.module.scss';
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
const phoneList = [
   { name: 'iPhone 14', code: '1' },
   { name: 'iPhone 14 Pro Max', code: '2' },
   { name: 'Samsung Z Flip 4', code: '3' },
];
function SearchTag() {
   return (
      <div className={cx('wrapper')}>
         {phoneList.map((phone) => (
            <Tag name={phone.name} code={phone.code} key={phone.code} />
         ))}
         {typeList.map((type) => (
            <Tag name={type.name} code={type.code} key={type.code} />
         ))}
      </div>
   );
}

export default SearchTag;
