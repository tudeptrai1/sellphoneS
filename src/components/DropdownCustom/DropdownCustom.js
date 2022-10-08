import Dropdown from 'react-dropdown';
import { useState, memo, useEffect, sendData, useRef } from 'react';
import classNames from 'classnames/bind';
// import 'react-dropdown/style.css';
import * as ReactDOM from 'react-dom';

import styles from './DropdownCustom.module.scss';
const cx = classNames.bind(styles);

function DropdownCustom(props) {
   const ref = useRef();

   sendData = (value) => {
      props.parentCallback(ref.current !== undefined ? value : '');
   };
   sendData(ref.current.state.selected.label);
   console.log('render - dropdown');
   return (
      <Dropdown
         ref={ref}
         options={props.options}
         className={cx('wrapper-custom')}
         arrowClassName={cx('arrow-custom')}
         menuClassName={cx('menu-custom')}
         onChange={() => {
            value == '' ? '' : ref.current.state.selected.label;
         }}
         controlClassName={cx('control-custom')}
         // value={}
         placeholder={props.placeholder}
         arrowClosed={<span className={cx('arrow-closed')} />}
         arrowOpen={<span className={cx('arrow-open')} />}
      />
   );
}

export default memo(DropdownCustom);
