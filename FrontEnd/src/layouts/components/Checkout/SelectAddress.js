import axios from 'axios';
import classNames from 'classnames/bind';
import { useState, useEffect, useCallback, memo, sendData } from 'react';
import * as ReactDOM from 'react-dom';
import toast, { Toaster } from 'react-hot-toast';
import DropdownCus from '~/components/DropdownCus';
import styles from './SelectAddress.module.scss';
const cx = classNames.bind(styles);
function SelectAddress() {
   return <div className={cx('wrapper')}>
    
   </div>;
}

export default SelectAddress;
