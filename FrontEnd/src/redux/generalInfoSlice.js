import { createSlice } from '@reduxjs/toolkit';
import * as cartService from '~/services/cartService';
export const generalInfoSlice = createSlice({
   name: 'generalInfo',
   initialState: {
      user: JSON.parse(localStorage.getItem('user')),
      listMemory: [],
      listColor: [],
      listBrand: [],
      listMemoryCustom: [],
      listColorCustom: [],
      listBrandCustom: [],
      listProduct: [],
      listCart: null,
      amountCart: null,
   },
   reducers: {
      updateListMemory: (state, action) => {
         state.listMemory = action.payload.listMemory;
         let temp = [];
         state.listMemory.map((item) => {
            var b = { label: item.value, value: item.id };
            temp.push(b);
         });
         state.listMemoryCustom = temp;
         return;
      },
      updateListColor: (state, action) => {
         state.listColor = action.payload.listColor;
         let temp = [];
         state.listColor.map((item) => {
            var b = { label: item.name, value: item.id };
            temp.push(b);
         });
         state.listColorCustom = temp;
         return;
      },
      updateListBrand: (state, action) => {
         state.listBrand = action.payload.listBrand;
         let temp = [];
         state.listBrand.map((item) => {
            var b = { label: item.name, value: item.id };
            temp.push(b);
         });
         state.listBrandCustom = temp;
         return;
      },
      updateListProduct: (state, action) => {
         state.listProduct = action.payload.list;
      },
      addListProduct: (state, action) => {
         state.listProduct.push(action.payload.list);
      },
      setUser: (state, action) => {
         state.user = action.payload.user;
      },
      setAmountCart: (state, action) => {
         state.amountCart = action.payload.amount;
      },
      setListCart: (state, action) => {
         state.listCart = action.payload.listCart;
      },
      setAmountProductCart: (state, action) => {
         const product_id = action.payload.product_id;
         const amount = Number(action.payload.amount);
         state.listCart.map((item, index) => {
            if (product_id === item.id) {
               amount === 0 ? state.listCart.splice(index, 1) : (state.listCart[index].amount_cart = amount);
               return;
            }
         });
      },
      addToCart: (state, action) => {
         let check = 0;
         state.listCart.map((item) => {
            if (item.id === action.payload.product.id) {
               item.amount_cart = item.amount_cart + 1;
               check = 1;
               return;
            }
         });
         let product = action.payload.product;
         let temp = Object.assign({}, product, { amount_cart: 1 });
         state.listCart.push(temp);
      },
   },
});
export const {
   updateListMemory,
   updateListColor,
   updateListBrand,
   updateMemoryAvailable,
   updateListProduct,
   addListProduct,
   setUser,
   setAmountCart,
   setListCart,
   setAmountProductCart,
   addToCart,
} = generalInfoSlice.actions;
export default generalInfoSlice.reducer;
