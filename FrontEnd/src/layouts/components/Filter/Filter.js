import classNames from 'classnames/bind';
import * as ReactDOM from 'react-dom';
import { useState, useCallback } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { MultiSelect } from 'react-multi-select-component';
import toast, { Toaster } from 'react-hot-toast';

import { updateSearch, updateName, search } from '~/redux/searchSlice';
import * as searchService from '~/services/searchService';
import styles from './Filter.module.scss';
import Button from '~/components/Button';
import RangeSlider from '~/components/RangeSlider';
import SearchResult from '~/layouts/components/SearchResult';
import {
   faPercent,
   faSearch,
   faSortAlphaDesc,
   faSortNumericDownAlt,
   faTruckFast,
} from '@fortawesome/free-solid-svg-icons';

const cx = classNames.bind(styles);

function Filter() {
   const generalInfo = useSelector((state) => state.generalInfo);
   const searchObject = useSelector((state) => state.search);

   const dispatch = useDispatch();

   const [priceSort, setPriceSort] = useState(null);
   const [nameSort, setNameSort] = useState(null);
   const [ready, setReady] = useState(null);
   const [discount, setDiscount] = useState(null);
   const [valueRangeSlider, setValueRangeSlider] = useState([]);
   const [brand, setBrand] = useState([]);
   const [memory, setMemory] = useState([]);
   const [color, setColor] = useState([]);
   const handlePriceSort = useCallback(() => {
      setPriceSort(priceSort === '' ? 'desc' : priceSort === 'asc' ? 'desc' : 'asc');
   }, [priceSort]);

   const handleNameSort = useCallback(() => {
      setNameSort(nameSort === '' ? 'desc' : nameSort === 'asc' ? 'desc' : 'asc');
   }, [nameSort]);

   const handleReady = useCallback(() => {
      setReady(ready === null ? true : null);
      !ready === true ? setStyleChosen('btn-ready') : unSetStyleChosen('btn-ready');
      // eslint-disable-next-line
   }, [ready]);

   const handleDiscount = useCallback(() => {
      setDiscount(discount === null ? true : null);
      !discount === true ? setStyleChosen('btn-discount') : unSetStyleChosen('btn-discount');
      // eslint-disable-next-line
   }, [discount]);

   const callbackValueRangeSlider = useCallback((childData) => {
      setValueRangeSlider(childData);
   }, []);

   const handleSubmit = () => {
      // console.log(brand);
      let brand_id = [];
      brand.map((item) => {
         brand_id.push(item.value);
      });
      let color_id = [];
      color.map((item) => {
         color_id.push(item.value);
      });
      let memory_id = [];
      memory.map((item) => {
         memory_id.push(item.value);
      });

      const checkAmount = searchObject.amount === ready;
      const checkMin =
         searchObject.min === null && valueRangeSlider[0] === 0 ? true : searchObject.min === valueRangeSlider[0];
      const checkMax =
         searchObject.max === null && valueRangeSlider[1] === 100000000
            ? true
            : searchObject.max === valueRangeSlider[1];
      const checkBrand =
         searchObject.brand === null && brand_id.length === 0
            ? true
            : JSON.stringify(searchObject.brand) === JSON.stringify(brand_id);
      const checkMemory =
         searchObject.memory === null && memory_id.length === 0
            ? true
            : JSON.stringify(searchObject.memory) === JSON.stringify(memory_id);
      const checkColor =
         searchObject.color === null && color_id.length === 0
            ? true
            : JSON.stringify(searchObject.color) === JSON.stringify(color_id);
      const checkOrderPrice = searchObject.orderPrice === priceSort;
      const checkOrderName = searchObject.orderName === nameSort;
      const checkDiscount = searchObject.discount === discount;

      if (
         checkAmount &&
         checkMin &&
         checkMax &&
         checkBrand &&
         checkMemory &&
         checkColor &&
         checkOrderPrice &&
         checkOrderName &&
         checkDiscount
      ) {
         // toast.remove();
         // toast.error('Chọn lựa chọn khác');
      } else {
         const fetchApi = async () => {
            toast.remove();
            toast.loading('Waiting...');
            const result = await searchService.search(
               searchObject.name,
               null,
               valueRangeSlider[0] !== 0 ? valueRangeSlider[0] : null,
               valueRangeSlider[1] !== 100000000 ? valueRangeSlider[1] : null,
               ready,
               brand_id,
               color_id,
               memory_id,
               priceSort,
               nameSort,
               discount,
            );

            result.length === 0 && toast.error('Không có kết quả tìm kiếm nào');
            dispatch(search({ listSearch: result }));
            toast.remove();

            dispatch(
               updateSearch({
                  brand: brand_id,
                  color: color_id,
                  memory: memory_id,
                  min: valueRangeSlider[0] !== 0 ? valueRangeSlider[0] : null,
                  max: valueRangeSlider[1] !== 100000000 ? valueRangeSlider[1] : null,
                  amount: ready,
                  orderPrice: priceSort,
                  orderName: nameSort,
                  discount: discount,
               }),
            );
         };
         fetchApi();
      }

      // eslint-disable-next-line
   };
   const styleButton = {
      backgroundColor: 'var(--primary)',
      color: 'var(--white)',
      boxShadow: 'var(--box-shadow-thick)',
      outline: 'solid 1px var(--primary)',
   };
   const nonStyleButton = {
      backgroundColor: 'white',
      color: 'var(--black)',
      boxShadow: 'var(--box-shadow-light)',
      outline: 'none',
   };
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
   // const notify = (text) => toast.warn(text);

   return (
      <div className={cx('wrapper')}>
         {/* <Toaster position="top-right" reverseOrder={false} /> */}

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
            <div className={cx('price')}>
               <RangeSlider callbackRangeSlider={callbackValueRangeSlider} />
            </div>
         </div>
         <div className={cx('list-filter')}>
            <div className={cx('memory')}>
               <div className={cx('title')}>Chọn hãng</div>
               <MultiSelect
                  options={generalInfo.listBrandCustom}
                  value={brand}
                  onChange={setBrand}
                  labelledBy="Chọn hãng"
               />
            </div>
            <div className={cx('memory')}>
               <div className={cx('title')}>Chọn dung lượng</div>
               <MultiSelect
                  options={generalInfo.listMemoryCustom}
                  value={memory}
                  onChange={setMemory}
                  labelledBy={'Chọn dung lượng'}
               />
            </div>
            <div className={cx('memory')}>
               <div className={cx('title')}>Chọn màu</div>
               <MultiSelect
                  options={generalInfo.listColorCustom}
                  value={color}
                  onChange={setColor}
                  labelledBy="Chọn màu"
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
                  {priceSort === null ? 'Sắp xếp theo giá' : priceSort === 'desc' ? 'Giá giảm dần' : 'Giá tăng dần'}
               </Button>
            </div>
            <div className={cx('sort-name')}>
               <Button
                  className={cx('btn-sort-name')}
                  normalRounded
                  leftIcon={faSortAlphaDesc}
                  onChange={handleNameSort}
               >
                  {nameSort === null ? 'Sắp xếp theo tên' : nameSort === 'desc' ? 'Tên giảm dần' : 'Tên tăng dần'}
               </Button>
            </div>
         </div>
         <Button className={cx('btnSubmit')} normalRounded leftIcon={faSearch} onClick={handleSubmit}>
            {'Tìm kiếm'}
         </Button>
         {/*Đang lọc theo */}

         {/* <div className={cx('title')}>Đang lọc theo</div> */}

         {/* CÁC MỤC ĐANG CHỌN */}
         <div className={cx('title')}>Kết quả</div>
         <div className={cx('result')}>
            <SearchResult />
         </div>
      </div>
   );
}

export default Filter;
