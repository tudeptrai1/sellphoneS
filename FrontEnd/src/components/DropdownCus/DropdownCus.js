import * as ReactDOM from 'react-dom';
import classNames from 'classnames/bind';
import { useState, memo, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux';

import { updateProvince, updateDistrict, updateWard } from '~/redux/orderSlice';
import styles from './DropdownCus.module.scss';
import { provinces, districts, wards } from '~/utils/data-address';
const cx = classNames.bind(styles);
function DropdownCus({ type, options, placeholder }) {
   const dispatch = useDispatch();
   const orderObject = useSelector((state) => state.order);

   const [searchValue, setSearchValue] = useState('');
   const handleChange = (e) => {
      const keyword = e.target.value;
      const KEY_SPACE = /\s/g;
      if (options.length > 0 && !KEY_SPACE.test(keyword[0])) {
         setSearchValue(keyword);
      }
   };
   const handleClick = (e) => {
      if (e !== undefined) {
         type === 'Province'
            ? dispatch(updateProvince({ province: { name: e.target.innerHTML, code: e.target.id } })) &&
              dispatch(updateDistrict({ district: { name: null, code: null } })) &&
              dispatch(updateWard({ ward: { name: null, code: null } }))
            : type === 'District'
            ? dispatch(updateDistrict({ district: { name: e.target.innerHTML, code: e.target.id } })) &&
              dispatch(updateWard({ ward: { name: null, code: null } }))
            : type === 'Ward'
            ? dispatch(updateWard({ ward: { name: e.target.innerHTML, code: e.target.id } }))
            : console.log('Error');
      }
   };
   // console.log('render - dropdown - ' + placeholder);
   return (
      <div className={cx('wrapper')}>
         <button className={cx('btn')}>
            <p>
               {type === 'Province' && orderObject.addressReceive.province.name !== null
                  ? orderObject.addressReceive.province.name
                  : type === 'District' && orderObject.addressReceive.district.name !== null
                  ? orderObject.addressReceive.district.name
                  : type === 'Ward' && orderObject.addressReceive.ward.name !== null
                  ? orderObject.addressReceive.ward.name
                  : placeholder}
            </p>
         </button>
         <div className={cx('content')} id="content">
            <input
               value={searchValue}
               type="text"
               placeholder="Tìm..."
               spellCheck={false}
               className={cx('search')}
               id="search"
               onChange={handleChange}
            />

            {options.map((option) =>
               type === 'Province' && option.name.toLowerCase().includes(searchValue.toLowerCase()) ? (
                  <p key={option.code} id={option.code} onClick={handleClick}>
                     {option.name}
                  </p>
               ) : type === 'District' &&
                 option.province === Number(orderObject.addressReceive.province.code) &&
                 option.name.toLowerCase().includes(searchValue.toLowerCase()) ? (
                  <p key={option.code} id={option.code} onClick={handleClick}>
                     {option.name}
                  </p>
               ) : type === 'Ward' &&
                 option.district === Number(orderObject.addressReceive.district.code) &&
                 option.name.toLowerCase().includes(searchValue.toLowerCase()) ? (
                  <p key={option.code} id={option.code} onClick={handleClick}>
                     {option.name}
                  </p>
               ) : null,
            )}
         </div>
      </div>
   );
}

export default memo(DropdownCus);
