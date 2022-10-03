import classNames from 'classnames/bind';
import styles from './Slide.module.scss';
const cx = classNames.bind(styles);

function Slide(props) {
   return (
      <div className={cx('wrapper')}>
         <img src={props.item.imgSource} alt={props.alt} />
      </div>
   );
}

export default Slide;