import classNames from 'classnames/bind';
import { useEffect, useState, useRef } from 'react';
import Tippy from '@tippyjs/react/headless';
import { Link } from 'react-router-dom';
import { useSelector, useDispatch } from 'react-redux';
import { updateName, search } from '~/redux/searchSlice';

import { faCircleXmark, faMagnifyingGlass, faSpinner } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import * as searchService from '~/services/searchService';
import { Wrapper as PopperWrapper } from '~/components/Popper';
import SearchResultItem from './SearchResultItem/SearchResultItem';
import styles from './Search.module.scss';
import useDebounce from '~/hooks/useDebounce';
import config from '~/config';
const cx = classNames.bind(styles);
function Search() {
   const searchObject = useSelector((state) => state.search);
   const dispatch = useDispatch();
   const [searchResult, setSearchResult] = useState([]);
   const [showResults, setShowResults] = useState(true);
   const [loading, setLoading] = useState(false);
   // const [showSearch, setShowSearch] = useState(false);

   const debounced = useDebounce(searchObject.name, 500);

   const refInput = useRef();

   useEffect(() => {
      if (searchObject.name === null) {
         setSearchResult([]);
         return;
      }
      const fetchApi = async () => {
         setLoading(true);
         const result = await searchService.search(debounced.trim());
         dispatch(search({ listSearch: result }));
         setSearchResult(result.slice(0, 5));
         setLoading(false);
      };
      fetchApi();
      // eslint-disable-next-line
   }, [debounced]);

   const handleClear = () => {
      dispatch(updateName({ name: null }));
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
      if (keyword.length === 0) dispatch(updateName({ name: null }));
      else {
         const KEY_SPACE = /\s/g;
         if (!KEY_SPACE.test(keyword[0])) {
            dispatch(updateName({ name: keyword }));
         } else dispatch(updateName({ name: null }));
      }
   };
   const handleKeyPress = (e) => {
      if (e.key === 'Enter') {
         e.preventDefault();
         if (document.getElementById('goToMore')) {
            setSearchResult([]);
            // setSearchResult([]);
            // dispatch(updateName({ name: debounced.trim() }));
            document.getElementById('goToMore').click();
         }
      }
   };
   // console.log('render -search box');
   return (
      <div id="searchBoxResult">
         <Tippy
            interactive
            // appendTo={() => document.body}
            visible={showResults && searchResult.length > 0}
            render={(attrs) => (
               <div
                  className={cx('search-result')}
                  style={{ backgroundColor: 'rgb(255, 255, 255, 1)', borderRadius: 'var(--search-border-radius)' }}
                  tabIndex="-1"
                  {...attrs}
               >
                  <PopperWrapper>
                     {searchResult.map((result) => (
                        <SearchResultItem key={result.id} data={result} />
                     ))}
                  </PopperWrapper>
                  <Link to={config.routes.catalog}>
                     <p
                        id="goToMore"
                        style={{
                           padding: '5px',
                           background: 'var(--primary)',
                           color: '#fff',
                           textAlign: 'center',
                           borderRadius: '0px 0px 10px 10px',
                        }}
                     >
                        More
                     </p>
                  </Link>
               </div>
            )}
            onClickOutside={handleHideResults}
         >
            <div className={cx('search')}>
               <input
                  ref={refInput}
                  value={searchObject.name === null ? '' : searchObject.name}
                  type="text"
                  placeholder="Bạn muốn tìm gì..."
                  spellCheck={false}
                  onChange={handleChange}
                  onFocus={handleShowResults}
                  onKeyPress={handleKeyPress}
               />
               {!!searchObject.name && !loading && (
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
