import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import { Link } from 'react-router-dom';
import Image from '~/components/Image';
import styles from './SearchResultItem.module.scss';
const cx = classNames.bind(styles);
function SearchResultItem({ data }) {
   return (
      <Link to={`/${data.nickname}`} className={cx('wrapper')}>
         <Image className={cx('thumbnail')} src={data.avatar} alt={data.nickname} />
         <div className={cx('info')}>
            <p className={cx('name')}>{data.full_name}</p>
            <span className={cx('price')}>{data.likes_count}</span>
         </div>
      </Link>
   );
}
SearchResultItem.propTypes = {
   data: PropTypes.object,
};

export default SearchResultItem;
