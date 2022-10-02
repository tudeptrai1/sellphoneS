import classNames from 'classnames/bind';
import Header from '~/components/Layout/components/Header';
import Footer from '~/components/Layout/components/Footer';

import styles from './Default.module.scss';
const cx = classNames.bind(styles);

function DefaultLayout({ children }) {
   return (
      <div className={cx('wrapper')}>
         <Header />
         <div className={cx('container')}>
            <div className={cx('content')}>{children}</div>
         </div>
         <Footer />
      </div>
   );
}

export default DefaultLayout;
