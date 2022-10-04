import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import styles from './Tag.module.scss';
const cx = classNames.bind(styles);
function Tag({ name, code }) {
   return (
      <div className={cx('wrapper')}>
         <p>{name}</p>
      </div>
   );
}
Tag.propTypes = {
   name: PropTypes.string.isRequired,
   code: PropTypes.string.isRequired,
};
export default Tag;
