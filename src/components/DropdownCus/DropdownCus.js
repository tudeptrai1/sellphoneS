// import { useState, memo, useEffect, useRef } from 'react';
// import * as ReactDOM from 'react-dom';

// import classNames from 'classnames/bind';
// import useDebounce from '~/hooks/useDebounce';

// import styles from './DropdownCus.module.scss';
// import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
// import { faSearch } from '@fortawesome/free-solid-svg-icons';
// const cx = classNames.bind(styles);

function DropdownCus({ callbackDropDown, options, placeholder }) {
   // const ref = useRef();
   // const [valueDropdown, setValueDropdown] = useState();
   // const [searchValue, setSearchValue] = useState('');
   // useEffect(() => {
   //    const handleChange = setTimeout(() => setSearchValue(searchValue), 1000);
   //    return () => clearTimeout(handleChange);
   // }, [searchValue]);
   // const handleChange = (e) => {
   //    const keyword = e.target.value;
   //    const KEY_SPACE = /\s/g;
   //    if (!KEY_SPACE.test(keyword[0])) {
   //       setSearchValue(keyword);
   //    }
   // };
   // console.log(searchValue);
   // console.log('render - dropdown - ' + placeholder);
   // return (
   //    <div className={cx('wrapper')} ref={ref}>
   //       <button className={cx('btn')}>
   //          <p>{placeholder}</p>
   //       </button>
   //       <div className={cx('content')}>
   //          <input
   //             value={searchValue}
   //             type="text"
   //             placeholder="Tìm..."
   //             spellCheck={false}
   //             className={cx('search')}
   //             id="search"
   //             onChange={handleChange}
   //          />
   //          {options.map((option) => option.name.includes(searchValue) && <p key={option.code}>{option.name}</p>)}
   //       </div>
   //    </div>
   // );
}

export default memo(DropdownCus);
