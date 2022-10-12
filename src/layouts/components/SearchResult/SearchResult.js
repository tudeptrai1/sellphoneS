import { useState, useEffect, lazy } from 'react';
import classNames from 'classnames/bind';
import styles from './SearchResult.module.scss';
// import FeaturedProductItem from '~/layouts/components/FeaturedProduct/FeaturedProductItem';
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

   if (error) {
      return <>{error.message}</>;
   } else if (!loaded) {
      return (
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
      );
   } else {
      return (
         <div className={cx('wrapper')}>
            <div className={cx('card-grid')}>
               {data.map((item) => (
                  <div className={cx('box')} key={item.alpha3Code}>
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

export default SearchResult;
