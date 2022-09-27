import classNames from 'classnames/bind';
import Header from './Header';
import Footer from './Footer';
import NavigationBar from './NavigationBar';
import styles from './Default.module.scss';
const cx = classNames.bind(styles);

function DefaultLayout({ children }) {
   return (
      <div className={cx('wrapper')}>
         <Header />
         <NavigationBar />
         <div className={cx('container')}>
            <div className={cx('content')}>{children}</div>
         </div>
         <Footer />
      </div>
   );
}

export default DefaultLayout;
