import { useState, memo, useEffect } from 'react';
import classNames from 'classnames/bind';
import styles from './DropdownCus.module.scss';
const cx = classNames.bind(styles);

function DropdownCus({ callbackDropDown, options, placeholder }) {
   const [valueDropdown, setValueDropdown] = useState({ code: '', name: '' });
   const [searchValue, setSearchValue] = useState('');

   const handleChange = (e) => {
      const keyword = e.target.value;
      const KEY_SPACE = /\s/g;
      if (!KEY_SPACE.test(keyword[0])) {
         setSearchValue(keyword);
      }
   };
   const handleClick = (e) => {
      // setValueDropdown({ code: e.target.id, name: e.target.innerHTML });
      e !== undefined && setValueDropdown({ code: e.target.id, name: e.target.innerHTML });
      // e !== undefined && setValue(e.target.innerHTML);
   };
   useEffect(() => {
      // setValueDropdown({ code: '', name: '' });
      valueDropdown !== undefined && callbackDropDown(valueDropdown);
      // eslint-disable-next-line
   }, [valueDropdown]);
   console.log('render - dropdown - ' + placeholder);
   return (
      <div className={cx('wrapper')}>
         <button className={cx('btn')}>
            <p>{valueDropdown.code !== '' ? valueDropdown.name : placeholder}</p>
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
            {options.map(
               (option) =>
                  option.name.toLowerCase().includes(searchValue.toLowerCase()) && (
                     <p key={option.code} id={option.code} onClick={handleClick}>
                        {option.name}
                     </p>
                  ),
            )}
         </div>
      </div>
   );
}

export default memo(DropdownCus);
