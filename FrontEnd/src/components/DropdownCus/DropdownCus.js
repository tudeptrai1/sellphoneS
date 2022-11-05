import { useState, memo, useEffect } from 'react';
import * as ReactDOM from 'react-dom';

import classNames from 'classnames/bind';
import styles from './DropdownCus.module.scss';
const cx = classNames.bind(styles);

function DropdownCus({ callbackDropDown, options, placeholder }) {
   const [code, setCode] = useState();
   const [name, setName] = useState('');
   const [searchValue, setSearchValue] = useState('');
   const [isChoice, setIsChoice] = useState(false);
   const handleChange = (e) => {
      const keyword = e.target.value;
      const KEY_SPACE = /\s/g;
      if (options.length > 0 && !KEY_SPACE.test(keyword[0])) {
         setSearchValue(keyword);
      }
   };
   const handleClick = (e) => {
      if (e !== undefined) {
         setName(e.target.innerHTML);
         setCode(e.target.id);
         setIsChoice(true);
      }
   };
   useEffect(() => {
      if (name !== '') {
         callbackDropDown({ code: code, name: name });
      }
      // eslint-disable-next-line
   }, [name]);
   useEffect(() => {
      setIsChoice(false);
   }, [options]);
   console.log('render - dropdown - ' + placeholder);
   return (
      <div className={cx('wrapper')}>
         <button className={cx('btn')}>
            <p>{isChoice ? name : placeholder}</p>
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
