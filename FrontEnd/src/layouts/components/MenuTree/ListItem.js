import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import { memo } from 'react';
import styles from './ListItem.module.scss';
const cx = classNames.bind(styles);
function ListItem(props) {
   console.log('render - ' + props.id);
   return (
      <div className={cx('list-content')}>
         <div className={cx('type')}>
            <p className={cx('title')}>Sản phẩm</p>
            <p>{props.id}</p>
         </div>
         <div className={cx('type')}>
            <p className={cx('title')}>Sản phẩm bán chạy</p>
         </div>
         <div className={cx('type')}>
            <p className={cx('title')}>Chọn theo mức giá</p>
         </div>
         <div className={cx('type')}>
            <p className={cx('title')}>Sản phẩm Hot</p>
         </div>
      </div>
   );
}
ListItem.propTypes = {
   props: PropTypes.object,
};
export default memo(ListItem);
