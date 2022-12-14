import PropTypes from 'prop-types';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import classNames from 'classnames/bind';
import { faAngleRight } from '@fortawesome/free-solid-svg-icons';

import { useState, useRef, useEffect, memo } from 'react';
import styles from './MenuTreeItem.module.scss';
const cx = classNames.bind(styles);
function MenuTreeItem(prop) {
   const [isHovered, setHovered] = useState(false);
   const ref = useRef();
   const handleMouseOver = () => {
      setHovered(true);
      sendData();
   };
   const handleMouseOut = () => setHovered(false);
   useEffect(
      () => {
         const node = ref.current;
         if (node) {
            node.addEventListener('mouseover', handleMouseOver);
            node.addEventListener('mouseout', handleMouseOut);
            return () => {
               node.removeEventListener('mouseover', handleMouseOver);
               node.removeEventListener('mouseout', handleMouseOut);
            };
         }
      },
      // eslint-disable-next-line
      [isHovered], // Recall only if ref changes
   );
   const sendData = () => {
      prop.parentCallback(ref.current.getAttribute('id'));
   };
   // console.log('render - ' + prop.item.name);
   return (
      <div className={cx('item-phone')} key={prop.item.id} ref={ref} id={prop.item.id}>
         <p className={cx('name')}>
            {prop.item.name}
            {/* <FontAwesomeIcon icon={faAngleRight} /> */}
         </p>
      </div>
   );
}
MenuTreeItem.propTypes = {
   prop: PropTypes.object,
};
export default memo(MenuTreeItem);
