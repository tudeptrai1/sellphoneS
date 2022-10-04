import classNames from 'classnames/bind';
import PropTypes from 'prop-types';
import styles from './Banner.module.scss';
const cx = classNames.bind(styles);
function Banner({ url }) {
   return <div className={cx('banner-img')} style={{ backgroundImage: `url(${url})` }}></div>;
}
Banner.propTypes = {
   url: PropTypes.string.isRequired,
};
export default Banner;
