import classNames from 'classnames/bind';
import Input from '~/components/Input';
import Button from '~/components/Button';
import * as ReactDOM from 'react-dom';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPaypal } from '@fortawesome/free-brands-svg-icons';

import styles from './Pay.module.scss';
import { useState, useCallback, useEffect, sendData, memo } from 'react';
import Payment from '~/components/Payment/Payment';
const cx = classNames.bind(styles);
function Pay({ callbackFunction }) {
   return (
      <div className={cx('wrapper')}>
         <Payment />
      </div>
   );
}

export default Pay;
