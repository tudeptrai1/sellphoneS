import classNames from 'classnames/bind';
import { useEffect, useState, useRef } from 'react';
import Tippy from '@tippyjs/react/headless';

import * as searchService from '~/services/searchService';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCircleXmark, faMagnifyingGlass, faSpinner } from '@fortawesome/free-solid-svg-icons';
import { Wrapper as PopperWrapper } from '~/components/Popper';
import SearchResultItem from './SearchResultItem';
import styles from './Search.module.scss';
import useDebounce from '~/hooks/useDebounce';

const cx = classNames.bind(styles);
function Search() {
   const [searchValue, setSearchValue] = useState('');
   const [searchResult, setSearchResult] = useState([]);
   const [showResults, setShowResults] = useState(true);
   const [loading, setLoading] = useState(false);

   const debounced = useDebounce(searchValue, 500);

   const refInput = useRef();

   useEffect(() => {
      if (!searchValue.trim()) {
         setSearchResult([]);
         return;
      }
      const fetchApi = async () => {
         setLoading(true);
         const result = await searchService.search(debounced);
         setSearchResult(result);
         setLoading(false);
      };
      fetchApi();
      // eslint-disable-next-line
   }, [debounced]);

   const handleClear = () => {
      setSearchValue('');
      setSearchResult([]);
      refInput.current.focus();
   };
   const handleHideResults = () => {
      setShowResults(false);
   };
   const handleShowResults = () => {
      setShowResults(true);
   };
   const handleChange = (e) => {
      const keyword = e.target.value;
      const KEY_SPACE = /\s/g;

      if (!KEY_SPACE.test(keyword[0])) {
         setSearchValue(keyword);
      }
   };

   return (
      <div>
         <Tippy
            interactive
            appendTo={() => document.body}
            visible={showResults && searchResult.length > 0}
            render={(attrs) => (
               <div className={cx('search-result')} tabIndex="-1" {...attrs}>
                  <PopperWrapper>
                     {searchResult.map((result) => (
                        <SearchResultItem key={result.id} data={result} />
                     ))}
                  </PopperWrapper>
               </div>
            )}
            onClickOutside={handleHideResults}
         >
            <div className={cx('search')}>
               <input
                  ref={refInput}
                  value={searchValue}
                  type="text"
                  placeholder="Bạn muốn tìm gì..."
                  spellCheck={false}
                  onChange={handleChange}
                  onFocus={handleShowResults}
               />
               {!!searchValue && !loading && (
                  <button
                     className={cx('clear')}
                     onClick={() => {
                        handleClear();
                     }}
                  >
                     <FontAwesomeIcon icon={faCircleXmark} />
                  </button>
               )}

               {loading && <FontAwesomeIcon className={cx('loading')} icon={faSpinner} />}

               <button className={cx('search-btn')} onMouseDown={(e) => e.preventDefault()}>
                  <FontAwesomeIcon icon={faMagnifyingGlass} />
               </button>
            </div>
         </Tippy>
      </div>
   );
}

export default Search;
