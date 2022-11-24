import classNames from 'classnames/bind';
import { useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { updateListColor, updateListMemory, updateListBrand } from '~/redux/generalInfoSlice';
import toast, { Toaster } from 'react-hot-toast';

import * as brandService from '~/services/brandService';
import * as colorService from '~/services/colorService';
import * as memoryService from '~/services/memoryService';

import Filter from '~/layouts/components/Filter';
import TagList from '~/layouts/components/TagList';
import styles from './Catalog.module.scss';
const cx = classNames.bind(styles);

const typeList = [
   { name: 'iPhone', code: '1' },
   { name: 'Samsung', code: '2' },
   { name: 'Oppo', code: '3' },
   { name: 'Vivo', code: '4' },
   { name: 'Xiaomi', code: '5' },
   { name: 'Nokia', code: '6' },
   { name: 'OnePlus', code: '7' },
   { name: 'Realme', code: '8' },
];
const phoneList = [];
function Catalog() {
   const generalInfo = useSelector((state) => state.generalInfo);
   const dispatch = useDispatch();
   useEffect(() => {
      if (Object.keys(generalInfo.listBrand).length === 0) {
         const brand = brandService.all();
         brand.then((data) => {
            dispatch(updateListBrand({ listBrand: data }));
         });
         const color = colorService.all();
         color.then((data) => {
            dispatch(updateListColor({ listColor: data }));
         });
         const memory = memoryService.all();
         memory.then((data) => {
            dispatch(updateListMemory({ listMemory: data }));
         });
      }
   }, []);
   // console.log('render catalog');
   return (
      <div className={cx('wrapper')}>
         <Toaster position="top-right" reverseOrder={false} />
         <div className={cx('block-filter-sort')}>
            <Filter />
         </div>
      </div>
   );
}

export default Catalog;
