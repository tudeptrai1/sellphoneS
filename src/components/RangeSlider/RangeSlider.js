import classNames from 'classnames/bind';
import { useState, memo, useEffect, sendData } from 'react';
import { NumericFormat } from 'react-number-format';
import Tippy from '@tippyjs/react/headless';

import Slider from '@mui/material/Slider';
import styles from './RangeSlider.module.scss';
import Button from '~/components/Button';
import useDebounce from '~/hooks/useDebounce';

import { faSackDollar } from '@fortawesome/free-solid-svg-icons';

const cx = classNames.bind(styles);

const valueText = (value) => {
   if (value[0] !== 0 || value[1] !== 100000000) return convertVnd(value[0]) + ' - ' + convertVnd(value[1]);
   else return 'Chọn khoảng giá để lọc';
};

const convertVnd = (value) => {
   return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value);
};

const minDistance = 5000000;

function RangeSlider(props) {
   const [value, setValue] = useState([0, 100000000]);
   const debounced = useDebounce(value, 500);

   const handleChange = (e, newValue, activeThumb) => {
      if (!Array.isArray(value)) {
         return;
      }

      if (activeThumb === 0) {
         setValue([Math.min(newValue[0], value[1] - minDistance), value[1]]);
      } else {
         setValue([value[0], Math.max(newValue[1], value[0] + minDistance)]);
      }
   };
   sendData = () => {
      props.parentCallback(value);
   };

   useEffect(() => {
      sendData();
   }, [debounced]);

   console.log('render - range slider');

   return (
      <div className={cx('wrapper')}>
         <Tippy
            interactive
            appendTo="parent"
            placement="bottom"
            // visible="true"
            render={(attrs) => (
               <div className="tippy" tabIndex="-1" {...attrs}>
                  <div className={cx('tippy')}>
                     <div className={cx('box')}>
                        <Slider
                           className={cx('slider')}
                           getAriaLabel={() => 'Minimum distance'}
                           value={value}
                           onChange={handleChange}
                           step={5000000}
                           marks
                           min={0}
                           max={100000000}
                           // valueLabelDisplay="auto"
                           getAriaValueText={valueText}
                           disableSwap
                        />
                        <div className={cx('price')}>
                           <NumericFormat
                              className={cx('min')}
                              value={value[0]}
                              decimalScale={3}
                              thousandSeparator=","
                              suffix={'₫'}
                           />
                           <NumericFormat
                              className={cx('max')}
                              value={value[1]}
                              decimalScale={3}
                              thousandSeparator=","
                              suffix={'₫'}
                           />
                        </div>
                     </div>
                  </div>
               </div>
            )}
         >
            <div>
               <Button normalRounded leftIcon={faSackDollar} className={cx('btnPrice')}>
                  {valueText(value)}
               </Button>
            </div>
         </Tippy>
      </div>
   );
}
export default memo(RangeSlider);
