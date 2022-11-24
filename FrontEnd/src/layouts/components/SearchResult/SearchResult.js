import classNames from 'classnames/bind';
import { useLocation } from 'react-router-dom';
import { useSelector, useDispatch } from 'react-redux';
import { useState, memo, useEffect, lazy, Suspense } from 'react';

import * as searchService from '~/services/searchService';
import { search } from '~/redux/searchSlice';
import styles from './SearchResult.module.scss';
// import FeaturedProductItem from '../FeaturedProduct/FeaturedProductItem';
const cx = classNames.bind(styles);
const BoxProductItem = lazy(() => import('~/layouts/components/BoxProductItem'));
const FeaturedProductItem = lazy(() => import('~/layouts/components/FeaturedProductItem'));

function SearchResult() {
   const location = useLocation();

   const searchObject = useSelector((state) => state.search);
   const dispatch = useDispatch();
   const [loaded, setLoaded] = useState(true);

   const initial = async (brand) => {
      setLoaded(true);
      if (brand) {
         const result = await searchService.search(searchObject.name, null, null, null, null, [
            location.state.brand_id,
         ]);
         dispatch(search({ listSearch: result }));
      } else {
         const result = await searchService.search();
         dispatch(search({ listSearch: result }));
      }
   };
   useEffect(() => {
      if (location.state && location.state.brand_id !== null) {
         initial(true);
      } else if (Object.keys(searchObject.listSearch).length === 0) {
         initial(false);
      }
   }, []);
   const Loading = () => (
      <div className={cx('loading')}>
         <p>...</p>
      </div>
   );

   return (
      <div className={cx('wrapper')}>
         <div className={cx('card-grid')}>
            {Object.keys(searchObject.listSearch).length > 0 ? (
               searchObject.listSearch.map((item, index) => (
                  // <LazyLoad key={index} placeholder={<Loading />} height={100} offset={[-100, 100]}>
                  <Suspense
                     key={index}
                     fallback={
                        index < 4 && (
                           <div className={cx('loading')}>
                              <div className={cx('lds-roller')}>
                                 <div></div>
                                 <div></div>
                                 <div></div>
                                 <div></div>
                                 <div></div>
                                 <div></div>
                                 <div></div>
                                 <div></div>
                              </div>
                           </div>
                        )
                     }
                  >
                     <div className={cx('box')} key={index}>
                        <FeaturedProductItem className={cx('item')} product={item} />
                     </div>
                  </Suspense>
               ))
            ) : (
               <p>Không có kết quả tìm kiếm nào</p>
            )}
         </div>
      </div>
   );
}

export default memo(SearchResult);
