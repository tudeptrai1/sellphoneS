import { createSlice } from '@reduxjs/toolkit';
export const searchSlice = createSlice({
   name: 'search',
   initialState: {
      id: null,
      name: null,
      brand: null,
      color: null,
      memory: null,
      min: null,
      max: null,
      amount: null,
      status: null,
      discount: null,
      orderPrice: null,
      orderName: null,
      listSearch: {},
   },
   reducers: {
      updateSearch: (state, action) => {
         state.brand = action.payload.brand;
         state.color = action.payload.color;
         state.memory = action.payload.memory;
         state.min = action.payload.min;
         state.max = action.payload.max;
         state.amount = action.payload.amount;
         state.orderPrice = action.payload.orderPrice;
         state.orderName = action.payload.orderName;
         state.discount = action.payload.discount;
      },
      updateName: (state, action) => {
         state.name = action.payload.name;
      },
      search: (state, action) => {
         state.listSearch = action.payload.listSearch;
      },
      setBrand: (state, action) => {
         state.brand = action.payload.brand;
      },
      setMemory: (state, action) => {
         state.memory = action.payload.memory;
      },
      setColor: (state, action) => {
         state.color = action.payload.color;
      },
   },
});
export const { updateSearch, updateName, search, setBrand, setMemory, setColor } = searchSlice.actions;
export default searchSlice.reducer;
