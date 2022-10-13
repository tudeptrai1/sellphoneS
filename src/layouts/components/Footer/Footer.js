import { faFacebookF, faInstagram, faTwitter, faYoutube } from '@fortawesome/free-brands-svg-icons';
import Map from '~/components/Map';
import { faLocationDot } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import classNames from 'classnames/bind';
import styles from './Footer.module.scss';
const cx = classNames.bind(styles);

function Footer() {
   const key = 'AIzaSyDbGwJS5t7FakNV4PCdLDyIGyPnUmgAK-o';
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
               </div>
               <div className={cx('map-container')}>
                  <Map
                     className={cx('map')}
                     googleMapURL={`https://maps.googleapis.com/maps/api/js?key=${key}&callback=initMap`}
                     loadingElement={<div style={{ height: `100%`, width: `100%` }} />}
                     containerElement={
                        <div
                           style={{
                              height: `100%`,
                              margin: `auto`,
                              boxShadow: 'var(--box-shadow-light)',
                           }}
                        />
                     }
                     mapElement={<div style={{ height: `100%` }} />}
                  />
               </div>
               <div className={cx('social-menu')}>
                  <a href={'https://www.instagram.com/jjjsss_3'}>
                     <FontAwesomeIcon icon={faYoutube} className={cx('icon')} />
                     Youtube
                  </a>
                  <a href={'https://www.instagram.com/jjjsss_3'}>
                     <FontAwesomeIcon icon={faInstagram} className={cx('icon')} />
                     Instagram
                  </a>
                  <a href={'https://www.instagram.com/jjjsss_3'}>
                     <FontAwesomeIcon icon={faFacebookF} className={cx('icon')} />
                     Facebook
                  </a>
                  <a href={'https://www.instagram.com/jjjsss_3'}>
                     <FontAwesomeIcon icon={faTwitter} className={cx('icon')} />
                     Twitter
                  </a>
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
