import classNames from 'classnames/bind';
import styles from './OderLookup.module.scss';
import icons from '~/assets/icons';
import Button from '~/components/Button';
import { faMagnifyingGlass } from '@fortawesome/free-solid-svg-icons';

const cx = classNames.bind(styles);
function OrderLookup() {
   return (
      <div className={cx('wrapper')}>
         <div className={cx('container')}>
            <div className={cx('bg')}></div>
            <div className={cx('icon')}>
               <img src={icons.shipper} alt="shipper" />
            </div>

            <div className={cx('content')}>
               <div className={cx('title')}>
                  <p>TRA CỨU THÔNG TIN ĐƠN HÀNG</p>
               </div>
               <div className={cx('info')}>
                  <input className={cx('orderId')} type="text" placeholder="Nhập mã đơn hàng" />
                  <input className={cx('orderPhone')} type="text" placeholder="Nhập số điện thoại" />
               </div>
               <div>
                  <Button normalRounded leftIcon={faMagnifyingGlass} className={cx('check')}>
                     Kiểm tra
                  </Button>
               </div>
            </div>
            <div className={cx('result')}>
               <div className={cx('name')}>
                  <p>Họ và tên người đặt</p>
                  <p>Họ và tên người đặt</p>
               </div>
               <div className={cx('phone')}>
                  <p>Số điện thoại đặt hàng</p>
               </div>
               <div className={cx('date')}>
                  <p>Ngày đặt đơn hàng</p>
               </div>
               <div className={cx('status')}>
                  <p>Trạng thái đơn hàng</p>
               </div>
               <div className={cx('address')}>
                  <p>Địa chỉ nhận hàng</p>
               </div>
            </div>
         </div>
      </div>
   );
}

export default OrderLookup;
