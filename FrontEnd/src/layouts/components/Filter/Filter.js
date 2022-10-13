import classNames from 'classnames/bind';
import * as ReactDOM from 'react-dom';

import DropdownCustom from '~/components/DropdownCustom';
import Button from '~/components/Button';
import { faPercent, faSortAlphaDesc, faSortNumericDownAlt, faTruckFast } from '@fortawesome/free-solid-svg-icons';
import styles from './Filter.module.scss';
import RangeSlider from '~/components/RangeSlider';
import { useState, useCallback } from 'react';
import SearchResult from '~/layouts/components/SearchResult';
const cx = classNames.bind(styles);

const optionsRam = [
   {
      type: 'group',
      name: 'Dung lượng RAM',
      items: [
         { value: '1', label: '4GB - 6GB', className: 'ramOption' },
         { value: '2', label: '8GB - 12GB', className: 'ramOption' },
         { value: '3', label: 'Dưới 4GB', className: 'ramOption' },
      ],
   },
];
const optionsMemory = [
   {
      type: 'group',
      name: 'Bộ nhớ trong',
      items: [
         { value: '1', label: '32GB - 64GB', className: 'memoryOption' },
         { value: '2', label: '128GB - 256GB', className: 'memoryOption' },
         { value: '3', label: 'Trên 512GB', className: 'memoryOption' },
      ],
   },
];
const styleButton = {
   backgroundColor: 'var(--primary)',
   color: 'var(--white)',
   boxShadow: 'var(--box-shadow-thick)',
};
const nonStyleButton = {
   backgroundColor: 'white',
   color: 'var(--black)',
   boxShadow: 'var(--box-shadow-light)',
};

function Filter() {
   const [priceSort, setPriceSort] = useState('');
   const [nameSort, setNameSort] = useState('');
   const [ready, setReady] = useState();
   const [discount, setDiscount] = useState();
   const [valueRangeSlider, setValueRangeSlider] = useState([]);
   const [ram, setRam] = useState();
   const [memory, setMemory] = useState();

   const handlePriceSort = useCallback(() => {
      setPriceSort(priceSort === '' ? 'desc' : priceSort === 'asc' ? 'desc' : 'asc');
   }, [priceSort]);

   const handleNameSort = useCallback(() => {
      setNameSort(nameSort === '' ? 'desc' : nameSort === 'asc' ? 'desc' : 'asc');
   }, [nameSort]);

   const handleReady = useCallback(() => {
      setReady(ready === '' ? true : ready === true ? false : true);
      !ready ? setStyleChosen('btn-ready') : unSetStyleChosen('btn-ready');
   }, [ready]);

   const handleDiscount = useCallback(() => {
      setDiscount(discount === '' ? true : discount === true ? false : true);
      !discount ? setStyleChosen('btn-discount') : unSetStyleChosen('btn-discount');
   }, [discount]);

   const callbackValueRangeSlider = useCallback((childData) => {
      setValueRangeSlider(childData);
   }, []);
   const callbackDropdownRam = useCallback((childData) => {
      setRam(childData);
   }, []);
   const callbackDropdownMemory = useCallback((childData) => {
      setMemory(childData);
   }, []);

   const setStyleChosen = (id) => {
      var a = ReactDOM.findDOMNode(document.getElementById(id));
      a.style.backgroundColor = styleButton.backgroundColor;
      a.style.color = styleButton.color;
      a.style.boxShadow = styleButton.boxShadow;
   };
   const unSetStyleChosen = (id) => {
      var a = ReactDOM.findDOMNode(document.getElementById(id));
      a.style.backgroundColor = nonStyleButton.backgroundColor;
      a.style.color = nonStyleButton.color;
      a.style.boxShadow = nonStyleButton.boxShadow;
   };

   console.warn('value range: ' + valueRangeSlider);
   console.warn('discount: ' + discount);
   console.warn('ready:  ' + ready);
   console.warn('ram:  ' + ram);
   console.warn('memory:  ' + memory);
   console.log('render - filter');

   return (
      <div className={cx('wrapper')}>
         {/* CÁC MỤC TÌM KIẾM */}
         <div className={cx('title')}>Tìm kiếm</div>
         <div className={cx('list-filter')}>
            <div className={cx('ready')}>
               <Button
                  id="btn-ready"
                  className={cx('btn-ready')}
                  normalRounded
                  leftIcon={faTruckFast}
                  onChange={handleReady}
               >
                  Còn hàng
               </Button>
            </div>
            <div className={cx('price')}>
               <RangeSlider callbackRangeSlider={callbackValueRangeSlider} />
            </div>
            <div className={cx('discount')}>
               <Button
                  id="btn-discount"
                  className={cx('btn-discount')}
                  normalRounded
                  leftIcon={faPercent}
                  onChange={handleDiscount}
               >
                  Khuyến mãi
               </Button>
            </div>

            <div className={cx('ram')}>
               <DropdownCustom
                  options={optionsRam}
                  placeholder="Dung lượng RAM"
                  callbackDropDown={callbackDropdownRam}
               />
            </div>
            <div className={cx('memory')}>
               <DropdownCustom
                  options={optionsMemory}
                  placeholder="Bộ nhớ trong"
                  callbackDropDown={callbackDropdownMemory}
               />
            </div>
         </div>
         {/* CÁC MỤC SẮP XẾP */}
         <div className={cx('title')}>Sắp xếp theo</div>
         <div className={cx('list-sort')}>
            <div className={cx('sort-price')}>
               <Button
                  className={cx('btn-sort-price')}
                  normalRounded
                  leftIcon={faSortNumericDownAlt}
                  onChange={handlePriceSort}
               >
                  {priceSort === '' ? 'Sắp xếp theo giá' : priceSort === 'desc' ? 'Giá giảm dần' : 'Giá tăng dần'}
               </Button>
            </div>
            <div className={cx('sort-name')}>
               <Button
                  className={cx('btn-sort-name')}
                  normalRounded
                  leftIcon={faSortAlphaDesc}
                  onChange={handleNameSort}
               >
                  {nameSort === '' ? 'Sắp xếp theo tên' : nameSort === 'desc' ? 'Tên giảm dần' : 'Tên tăng dần'}
               </Button>
            </div>
         </div>
         {/* CÁC MỤC ĐANG CHỌN */}
         <div className={cx('title')}>Kết quả</div>
         <div className={cx('result')}>
            <SearchResult />
         </div>
      </div>
   );
}

export default Filter;
