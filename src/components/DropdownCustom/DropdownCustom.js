import Dropdown from 'react-dropdown';
import { useState, memo, useEffect, sendData, useRef } from 'react';

import classNames from 'classnames/bind';
import 'react-dropdown/style.css';
import * as ReactDOM from 'react-dom';

import styles from './DropdownCustom.module.scss';
const cx = classNames.bind(styles);

function DropdownCustom({ callbackDropDown, options, placeholder }) {
   const ref = useRef();
   const [valueDropdown, setValueDropdown] = useState();

   const handleChange = (e) => {
      setValueDropdown(e.value);
   };
   useState(() => {
      valueDropdown !== undefined && handleChange();
   }, [valueDropdown]);

   useEffect(() => {
      valueDropdown !== undefined && callbackDropDown(valueDropdown);
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
