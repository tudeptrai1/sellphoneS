import { createSlice } from '@reduxjs/toolkit';

export const orderSlice = createSlice({
   name: 'cart',
   initialState: {
      listCart: [],
      listOrder: [],
      total: 0,
      amount: 0,
      discount_enter: null,
      discount: 0,
      discount_enter_info: null,
      nameReceive: '',
      phoneReceive: '',
      emailReceive: '',
      addressReceive: {
         province: {
            name: null,
            code: null,
         },
         district: {
            name: null,
            code: null,
         },
         ward: {
            name: null,
            code: null,
         },
         detail: '',
      },
      payment: null,
   },
   reducers: {
      updateInformation: (state, action) => {
         state.nameReceive = action.payload.name;
         state.phoneReceive = action.payload.phone;
         state.emailReceive = action.payload.email;
         state.addressReceive = action.payload.address;
         state.payment = action.payload.payment;
      },
      addToOrder: (state, action) => {
         state.listOrder.push(action.payload.product);
         state.total += action.payload.product.amount_cart * action.payload.product.sell_price;
         state.amount += action.payload.product.amount_cart;
         action.payload.product.discount !== null &&
            (state.discount +=
               (action.payload.product.amount_cart *
                  (action.payload.product.discount.discount_value * action.payload.product.sell_price)) /
               100);
      },
      removeFromOrder: (state, action) => {
         state.listOrder.map((item, index) => {
            if (action.payload.product.id === item.id) {
               state.listOrder.splice(index, 1);
               state.total -= action.payload.product.amount_cart * action.payload.product.sell_price;
               state.amount -= Number(action.payload.product.amount_cart);

               action.payload.product.discount !== null &&
                  (state.discount -=
                     (action.payload.product.amount_cart *
                        (action.payload.product.discount.discount_value * action.payload.product.sell_price)) /
                     100);

               return;
            }
         });
      },
      updateProvince: (state, action) => {
         state.addressReceive.province = action.payload.province;
      },
      updateDistrict: (state, action) => {
         state.addressReceive.district = action.payload.district;
      },
      updateWard: (state, action) => {
         state.addressReceive.ward = action.payload.ward;
      },
      updateAddressDetail: (state, action) => {
         state.addressReceive.detail = action.payload.detail;
      },
      updateNameReceive: (state, action) => {
         state.nameReceive = action.payload.name;
      },
      updatePhoneReceive: (state, action) => {
         state.phoneReceive = action.payload.phone;
      },
      updateEmailReceive: (state, action) => {
         state.emailReceive = action.payload.email;
      },
      updateDiscount: (state, action) => {
         state.discount_enter_info = action.payload.discount;
      },
      updateDiscountEnter: (state, action) => {
         state.discount_enter = action.payload.discount;
      },
      setListOrder: (state, action) => {
         state.listOrder = action.payload.list;
         state.total = 0;
         state.amount = 0;
         state.discount = 0;
      },
      updateInformationOrder: (state, action) => {
         if (action.payload.type === 'UP') {
            state.total += action.payload.product.sell_price;
            action.payload.product.discount !== null &&
               (state.discount =
                  state.discount +
                  (action.payload.product.discount.discount_value * action.payload.product.sell_price) / 100);
            state.amount = state.amount + 1;
         } else if (action.payload.type === 'DOWN') {
            state.total = state.total - action.payload.product.sell_price;
            action.payload.product.discount !== null &&
               (state.discount =
                  state.discount -
                  (action.payload.product.discount.discount_value * action.payload.product.sell_price) / 100);
            state.amount = state.amount - 1;
         }
      },
   },
});
export const {
   updateInformation,
   updateListOrder,
   addToOrder,
   removeFromOrder,
   updateCart,
   updateProvince,
   updateDistrict,
   updateWard,
   updateAddressDetail,
   updateNameReceive,
   updatePhoneReceive,
   updateEmailReceive,
   updateDiscount,
   updateDiscountEnter,
   setListOrder,
   updateInformationOrder,
} = orderSlice.actions;
export default orderSlice.reducer;
