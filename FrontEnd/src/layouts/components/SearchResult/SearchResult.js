import { useState, memo, useEffect, lazy } from 'react';
import classNames from 'classnames/bind';
import styles from './SearchResult.module.scss';
const cx = classNames.bind(styles);
const FeaturedProductItem = lazy(() => import('~/layouts/components/FeaturedProduct/FeaturedProductItem'));
function SearchResult() {
   const [error, setError] = useState(null);
   const [loaded, setLoaded] = useState(false);
   const [items, setItems] = useState([]);

   useEffect(() => {
      fetch('https://raw.githubusercontent.com/iamspruce/search-filter-painate-reactjs/main/data/countries.json')
         .then((res) => res.json())
         .then(
            (result) => {
               setLoaded(true);
               setItems(result);
               console.log(result);
            },
            (error) => {
               setLoaded(true);
               setError(error);
            },
         );
   }, []);

   const data = Object.values(items);
   console.log('render - list-result');
   if (error) {
      return <>{error.message}</>;
   } else if (!loaded) {
      return <>loading...</>;
   } else {
      return (
         <div className={cx('wrapper')}>
            <div className={cx('card-grid')}>
               {data.map((item, index) => (
                  <div className={cx('box')} key={index}>
                     <FeaturedProductItem
                        className={cx('item')}
                        id={item.alpha3Code}
                        name={item.name}
                        price={item.population}
                        image={item.flag.large}
                        discount="1000000"
                     />
                  </div>
               ))}
            </div>
         </div>
      );
   }
}

export default memo(SearchResult);
