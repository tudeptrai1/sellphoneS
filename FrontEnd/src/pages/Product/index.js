import axios from 'axios';
import classNames from 'classnames/bind';
import styles from './Product.module.scss';
import { useSelector, useDispatch } from 'react-redux';
import { useParams } from 'react-router-dom';
import { useState, useEffect } from 'react';
import { updateProduct, getListColor, getListProduct, getListMemory } from '~/redux/productSlice';
import { updateListColor, updateListMemory, updateListBrand } from '~/redux/generalInfoSlice';
import * as colorService from '~/services/colorService';
import * as memoryService from '~/services/memoryService';
import * as productService from '~/services/productService';
import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';
import ProductDetail from './ProductDetail';
const cx = classNames.bind(styles);

function Product() {
   const dispatch = useDispatch();
   const product = useSelector((state) => state.product);
   const generalInfo = useSelector((state) => state.generalInfo);
   const params = useParams();
   useEffect(() => {
      const res = productService.get(params.id);
      res.then((data) => {
         dispatch(updateProduct({ product: data }));
         const list = productService.detail(data.pg_id);
         list
            .then((data) => dispatch(getListProduct({ list: data })))
            .then(() => {
               if (Object.keys(generalInfo.listColor).length === 0) {
                  const color = colorService.all();
                  color
                     .then((data) => {
                        dispatch(updateListColor({ listColor: data }));
                        dispatch(getListColor({ color: data }));
                     })
                     .then(() => {
                        if (Object.keys(generalInfo.listMemory).length === 0) {
                           const memory = memoryService.all();
                           memory.then((data) => {
                              dispatch(updateListMemory({ listMemory: data }));
                              dispatch(getListMemory({ memory: data }));
                           });
                        }
                     });
               } else {
                  dispatch(getListColor({ color: generalInfo.listColor }));
                  dispatch(getListMemory({ memory: generalInfo.listMemory }));
               }
            });

         // .then(() => {

         //
      });
   }, []);
   useEffect(() => {}, []);
   useEffect(() => {
      // console.log(Object.keys(generalInfo.listColor) === 0);
      if (Object.keys(generalInfo.listColor) > 0 && Object.keys(generalInfo.listMemory) > 0) {
         dispatch(getListColor({ color: generalInfo.listColor }));
         dispatch(getListMemory({ memory: generalInfo.listMemory }));
      }
      // dispatch(getListColor({ color: generalInfo.listColor }));
      // dispatch(getListMemory({ memory: generalInfo.listMemory }));
   }, [product.listProduct]);

   // console.log('render product');
   return <ProductDetail />;
}

export default Product;
