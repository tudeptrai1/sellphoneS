import axios from 'axios';

import classNames from 'classnames/bind';
import { useState, useEffect, useCallback, memo, sendData } from 'react';
import * as ReactDOM from 'react-dom';
import toast, { Toaster } from 'react-hot-toast';

import Radio from '@mui/material/Radio';
import RadioGroup from '@mui/material/RadioGroup';
import FormControlLabel from '@mui/material/FormControlLabel';
import FormControl from '@mui/material/FormControl';
import FormLabel from '@mui/material/FormLabel';

import { Checkbox } from '@mui/material';
import { formatCurrency } from '~/utils/format';
import DropdownCus from '~/components/DropdownCus';
import styles from './Address.module.scss';
import { provinces, districts, wards } from '~/utils/data-address';
import { useSelector, useDispatch } from 'react-redux';
import { updateAddressDetail } from '~/redux/orderSlice';
const cx = classNames.bind(styles);
function Address({ callbackAddress, orderSubmitted }) {
   const orderObject = useSelector((state) => state.order);
   const dispatch = useDispatch();

   const notify = (text) => toast.error(text);
   const handleChange = (e) => {
      toast.remove();
      orderObject.addressReceive.ward.code !== null
         ? dispatch(updateAddressDetail({ detail: e.target.value }))
         : toast.error('Vui lòng chọn địa chỉ giao hàng');
   };
   // console.log('render address');
   return (
      <div className={cx('wrapper')}>
         {/* <Toaster position="top-right" reverseOrder={false} /> */}
         <div className={cx('title')}>THÔNG TIN GIAO HÀNG</div>
         <div className={cx('container')}>
            <div className={cx('title-small')}>Chọn địa chỉ giao hàng</div>

            <div className={cx('address')}>
               <div className={cx('address-item')} id="selectProvince">
                  <DropdownCus options={provinces} type={'Province'} placeholder="Chọn Tỉnh/Thành Phố" />
                  <span>Chọn tỉnh hoặc thành phố</span>
               </div>
               <div className={cx('address-item')} id="selectDistrict">
                  <DropdownCus options={districts} type={'District'} placeholder="Chọn Quận/Huyện" />
                  <span>Chọn quận hoặc huyện</span>
               </div>
               <div className={cx('address-item')} id="selectWard">
                  <DropdownCus options={wards} type={'Ward'} placeholder="Chọn Phường/Xã" />
                  <span>Chọn phường hoặc xã</span>
               </div>
            </div>
            <div className={cx('address')}>
               <input
                  value={orderObject.addressReceive.detail}
                  onChange={handleChange}
                  id="inputDetail"
                  placeholder="Nhập địa chỉ giao hàng chi tiết (Số nhà, tên đường, tổ dân phố)"
               />
            </div>
         </div>
      </div>
   );
}

export default memo(Address);
