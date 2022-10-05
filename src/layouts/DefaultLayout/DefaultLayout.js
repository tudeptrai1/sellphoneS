import { useState, useEffect } from 'react';

import PropTypes from 'prop-types';
import classNames from 'classnames/bind';
import Header from '~/layouts/components/Header';
import Footer from '~/layouts/components/Footer';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowUp } from '@fortawesome/free-solid-svg-icons';
import styles from './Default.module.scss';
const cx = classNames.bind(styles);

function DefaultLayout({ children }) {
   const [showGoToTop, setShowGoToTop] = useState(false);
   const handleScroll = () => {
      setShowGoToTop(window.scrollY >= 200);
   };
   useEffect(() => {
      window.addEventListener('scroll', handleScroll);
      return () => {
         window.removeEventListener('scroll', handleScroll);
      };
   }, []);
   return (
      <div className={cx('wrapper')}>
         <Header />
         <div className={cx('container')}>
            <div className={cx('content')}>{children}</div>
         </div>
         <Footer />
         {showGoToTop && (
            <button
               className={cx('btnGoToTop')}
               onClick={() => {
                  window.scrollTo({ top: 0, behavior: 'smooth' });
                  setShowGoToTop(false);
               }}
            >
               <FontAwesomeIcon icon={faArrowUp} className={cx('icon')} />
            </button>
         )}
      </div>
   );
}
DefaultLayout.propTypes = {
   children: PropTypes.node.isRequired,
};

export default DefaultLayout;
