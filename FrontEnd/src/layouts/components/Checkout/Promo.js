import classNames from 'classnames/bind';
import Input from '~/components/Input';
import Button from '~/components/Button';
import * as ReactDOM from 'react-dom';

import styles from './Promo.module.scss';
import { useState, useCallback, useEffect, sendData, memo } from 'react';
const cx = classNames.bind(styles);
function Promo({ callbackFunction }) {
   const [value, setValue] = useState('');

   const handleSubmit = () => {
      var a = ReactDOM.findDOMNode(document.getElementById('inputPromo'));
      const keyword = a.value;
      const KEY_SPACE = /\s/g;

      if (!KEY_SPACE.test(keyword[0])) {
         setValue(keyword);
      }
   };

   useEffect(() => {
      sendData();
   }, [value]);

   sendData = () => {
      callbackFunction(value);
   };
   console.log('re-render promo');
   return (
      <div className={cx('wrapper')}>
         <div className={cx('title')}>MÃ KHUYẾN MÃI</div>
         <div className={cx('input')}>
            <Input placeholder="Nhập mã khuyến mãi" primary id="inputPromo" />
            <Button primary className={cx('submit')} onClick={handleSubmit}>
               Áp dụng
            </Button>
         </div>
         <p>* Nhập mã khuyến mãi nếu có</p>
         <p>{value}</p>
      </div>
   );
}

export default memo(Promo);
