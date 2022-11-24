import { configureStore } from '@reduxjs/toolkit';
import searchReducer from './searchSlice';
import productReducer from './productSlice';
import generalInfoReducer from './generalInfoSlice';
import orderReducer from './orderSlice';
export default configureStore({
   reducer: {
      search: searchReducer,
      generalInfo: generalInfoReducer,
      product: productReducer,
      order: orderReducer,
   },
});
