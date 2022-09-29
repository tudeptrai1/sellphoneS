import { faFacebookF, faInstagram, faTwitter, faYoutube } from '@fortawesome/free-brands-svg-icons';
import { faLocationDot } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import classNames from 'classnames/bind';
import styles from './Footer.module.scss';
const cx = classNames.bind(styles);

function Footer() {
   return (
      <div className={cx('wrapper')}>
         <div className={cx('inner')}>
            <div className={cx('footer-body')}>
               <div className={cx('accordion-group')}>
                  <div className={cx('accordion')}>
                     <ul>
                        <li className={cx('footer-link')}>
                           <p>CỬA HÀNG GẦN ĐÂY</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>ĐĂNG KÝ THÀNH VIÊN</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>ĐĂNG KÝ EMAIL</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>GỬI ĐÁNH GIÁ</p>
                        </li>
                     </ul>
                  </div>
                  <div className={cx('accordion')}>
                     <ul>
                        <li className={cx('footer-link')}>
                           <p>CỬA HÀNG GẦN ĐÂY</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>ĐĂNG KÝ THÀNH VIÊN</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>ĐĂNG KÝ EMAIL</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>GỬI ĐÁNH GIÁ</p>
                        </li>
                     </ul>
                  </div>
                  <div className={cx('accordion')}>
                     <ul>
                        <li className={cx('footer-link')}>
                           <p>CỬA HÀNG GẦN ĐÂY</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>ĐĂNG KÝ THÀNH VIÊN</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>ĐĂNG KÝ EMAIL</p>
                        </li>
                        <li className={cx('footer-link')}>
                           <p>GỬI ĐÁNH GIÁ</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div className={cx('social-menu')}>
                  <FontAwesomeIcon icon={faYoutube} className={cx('icon')} />
                  <FontAwesomeIcon icon={faInstagram} className={cx('icon')} />
                  <FontAwesomeIcon icon={faFacebookF} className={cx('icon')} />
                  <FontAwesomeIcon icon={faTwitter} className={cx('icon')} />
               </div>
            </div>
            <div className={cx('sub-footer')}>
               <p className={cx('location')}>
                  <FontAwesomeIcon icon={faLocationDot} className={cx('icon')} />
                  Vietnam
               </p>
               <p className={cx('information')}>2021 Mobile Phones, Inc. All Rights Reserved</p>
               <p className={cx('help')}>Guide</p>
               <p className={cx('help')}>Help</p>
               <p className={cx('help')}>Term of Use</p>
               <p className={cx('help')}>Privacy Policy</p>
            </div>
         </div>
      </div>
   );
}

export default Footer;
