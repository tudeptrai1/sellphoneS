import { createSlice } from '@reduxjs/toolkit';
export const productSlice = createSlice({
   name: 'product',
   initialState: {
      id: null,
      name: null,
      pg_id: null,
      color_id: null,
      memory_id: null,
      imp_price: null,
      sell_price: null,
      amount: null,
      status: null,
      discount_id: null,
      brand: null,
      images: [null, null, null, null, null],
      tech_specs: [],
      discount: null,
      listProduct: [],
      listColor: [],
      listMemory: [],
   },
   reducers: {
      updateProduct: (state, action) => {
         const product = action.payload.product;
         state.id = product.id;
         state.name = product.name;
         state.pg_id = product.pg_id;
         state.color_id = product.color_id;
         state.memory_id = product.memory_id;
         state.imp_price = product.imp_price;
         state.sell_price = product.sell_price;
         state.amount = product.amount;
         state.status = product.status;
         state.discount_id = product.discount_id;
         state.brand = product.brand;
         state.images = product.images;
         state.tech_specs = product.tech_specs;
         state.discount = product.discount;
      },
      getListProduct: (state, action) => {
         state.listProduct = action.payload.list;
      },
      getListColor: (state, action) => {
         let j = 0;
         state.listColor = [];
         action.payload.color.map((item) => {
            for (let i = j; i < state.listProduct.length; i++) {
               if (item.id === state.listProduct[i].color_id) {
                  state.listColor.push(item);
                  return;
               }
            }
         });
         return;
      },
      getListMemory: (state, action) => {
         let j = 0;
         state.listMemory = [];
         action.payload.memory.map((item) => {
            for (let i = j; i < state.listProduct.length; i++) {
               if (item.id === state.listProduct[i].memory_id) {
                  state.listMemory.push(item);
                  return;
               }
            }
         });
         return;
      },
   },
});
export const { updateProduct, getListColor, getListProduct, getListMemory } = productSlice.actions;
export default productSlice.reducer;
