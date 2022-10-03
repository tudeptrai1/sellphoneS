import classNames from 'classnames/bind';
import styles from './Banner.module.scss';
const cx = classNames.bind(styles);
function Banner(props) {
   return <div className={cx('banner-img')} style={{ backgroundImage: `url(${props.item.imgSource})` }}></div>;
}

export default Banner;
