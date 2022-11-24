import classNames from 'classnames/bind';
import Input from '~/components/Input';
import Button from '~/components/Button';
import * as ReactDOM from 'react-dom';
import { useSelector, useDispatch } from 'react-redux';
import { updateDiscount, updateDiscountEnter } from '~/redux/orderSlice';
import * as discountService from '~/services/discountService';
import styles from './Promo.module.scss';
import toast, { Toaster } from 'react-hot-toast';

import { useState, useCallback, useEffect, sendData, memo } from 'react';
const cx = classNames.bind(styles);
function Promo() {
   const dispatch = useDispatch();
   const orderObject = useSelector((state) => state.order);
   const handleSubmit = async () => {
      const keyword = ReactDOM.findDOMNode(document.getElementById('inputPromo')).value;
      const KEY_SPACE = /\s/g;
      if (!KEY_SPACE.test(keyword[0]) && keyword.length > 0) {
         if (orderObject.discount_enter !== keyword) {
            toast.remove();
            dispatch(updateDiscountEnter({ discount: keyword }));
            const data = await discountService.get(keyword);
            data === null
               ? toast.error('Mã giảm giá không tồn tại')
               : dispatch(updateDiscount({ discount: data })) && toast.success('Áp dụng thành công');
         }
      }
   };
   const handleKeyPress = (e) => {
      if (e.key === 'Enter') {
         // Cancel the default action, if needed
         e.preventDefault();
         // Trigger the button element with a click
         document.getElementById('discountSubmit').click();
      }
   };
   useEffect(() => {
      dispatch(updateDiscount({ discount: null }));
      dispatch(updateDiscountEnter({ discount: null }));
   }, []);
   return (
      <div className={cx('wrapper')}>
         <div className={cx('title')}>MÃ KHUYẾN MÃI</div>
         <div className={cx('input')}>
            <Input onKeyPress={handleKeyPress} placeholder="Nhập mã khuyến mãi" primary id="inputPromo" />
            <Button id="discountSubmit" primary className={cx('submit')} onClick={handleSubmit}>
               Áp dụng
            </Button>
         </div>
         <p>
            {orderObject.discount_enter_info !== null &&
            orderObject.discount_enter.toLowerCase() === orderObject.discount_enter_info.discount_code.toLowerCase()
               ? orderObject.discount_enter_info.description
               : '* Nhập mã khuyến mãi nếu có'}
         </p>
      </div>
   );
}

export default memo(Promo);
