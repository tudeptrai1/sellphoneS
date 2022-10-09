import Dropdown from 'react-dropdown';
import { useState, memo, useEffect, useRef } from 'react';

import classNames from 'classnames/bind';
import 'react-dropdown/style.css';

import styles from './DropdownCustom.module.scss';
const cx = classNames.bind(styles);

function DropdownCustom({ callbackDropDown, options, placeholder }) {
   const ref = useRef();
   const [valueDropdown, setValueDropdown] = useState();

   const handleChange = (e) => {
      setValueDropdown(e.value);
   };

   useEffect(() => {
      callbackDropDown(valueDropdown);
      // eslint-disable-next-line
   }, [valueDropdown]);

   console.log('render - dropdown - ' + placeholder);
   return (
      <Dropdown
         ref={ref}
         options={options}
         className={cx('wrapper-custom')}
         arrowClassName={cx('arrow-custom')}
         menuClassName={cx('menu-custom')}
         onChange={handleChange}
         controlClassName={cx('control-custom')}
         placeholder={placeholder}
         arrowClosed={<span className={cx('arrow-closed')} />}
         arrowOpen={<span className={cx('arrow-open')} />}
      />
   );
}

export default memo(DropdownCustom);
