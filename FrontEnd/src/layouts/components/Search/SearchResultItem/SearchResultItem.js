import PropTypes from 'prop-types';
import classNames from 'classnames/bind';

import { Link } from 'react-router-dom';
import { formatCurrency } from '~/utils/format';

import Image from '~/components/Image';
import styles from './SearchResultItem.module.scss';
const cx = classNames.bind(styles);
function SearchResultItem({ data }) {
   // console.log(data);
   return (
      <Link to={`/product/${data.id}`} className={cx('wrapper')}>
         <Image className={cx('thumbnail')} src={process.env.PUBLIC_URL + data.images[0]} alt={data.name} />
         <div className={cx('info')}>
            <p className={cx('name')}>{data.name}</p>
            <span className={cx('priceDiscount')}>
               {formatCurrency(data.imp_price, '₫')}
               {'   '}
            </span>
            <span className={cx('price')}>{formatCurrency(data.sell_price, '₫')}</span>
         </div>
      </Link>
   );
}
SearchResultItem.propTypes = {
   data: PropTypes.object,
};

export default SearchResultItem;
