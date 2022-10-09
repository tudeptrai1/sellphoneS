import { useState, memo, useEffect, sendData, useRef, lazy } from 'react';
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
      //         const request_headers = new Headers();
      //         const api_key = null;
      //         request_headers.append("Authorization", `Bearer ${api_key}`);
      //         request_headers.append("Content-Type", "application/json");

      //         const request_options = {
      //             method: "GET",
      //             headers: request_headers
      //         };

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
      return <>loading...</>;
   } else {
      return (
         <div className={cx('wrapper')}>
            <div className={cx('card-grid')}>
               {data.map((item) => (
                  <div className={cx('box')}>
                     <FeaturedProductItem
                        className={cx('item')}
                        id={item.alpha3Code}
                        name={item.name}
                        price={item.population}
                        image={item.flag.large}
                        discount="1000000"
                     />
                  </div>
                  //   <li key={item.alpha3Code}>
                  //      <article className="card">
                  //         <div className="card-image">
                  //            <img src={item.flag.large} alt={item.name} />
                  //         </div>
                  //         <div className="card-content">
                  //            <h2 className="card-name">{item.name}</h2>
                  //            <ol className="card-list">
                  //               <li>
                  //                  population: <span>{item.population}</span>
                  //               </li>
                  //               <li>
                  //                  Region: <span>{item.region}</span>
                  //               </li>
                  //               <li>
                  //                  Capital: <span>{item.capital}</span>
                  //               </li>
                  //            </ol>
                  //         </div>
                  //      </article>
                  //   </li>
               ))}
            </div>
         </div>
      );
   }
}

export default SearchResult;
