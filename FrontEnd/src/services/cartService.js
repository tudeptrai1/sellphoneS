import * as httpRequest from '~/utils/httpRequest';
import axios from 'axios';

export const get = async (userId) => {
   try {
      const res = await httpRequest.get(`cart/get/` + userId, {
         headers: {
            Authorization: httpRequest.getAuthorizationHeader(),
         },
      });
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const count = async (userId) => {
   try {
      const res = await httpRequest.get(`cart/count/` + userId, {
         headers: {
            Authorization: httpRequest.getAuthorizationHeader(),
         },
      });
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const add = async (user_id, product_id) => {
   try {
      const res = await axios.post(
         process.env.REACT_APP_BASE_URL + 'cart/add',
         {
            user_id,
            product_id,
         },
         {
            headers: {
               Authorization: `Bearer ${JSON.parse(localStorage.getItem('access_token'))}`,
            },
         },
      );
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const update = async (user_id, product_id, amount) => {
   try {
      const res = await axios.post(
         process.env.REACT_APP_BASE_URL + 'cart/update',
         {
            user_id,
            product_id,
            amount,
         },
         {
            headers: {
               Authorization: `Bearer ${JSON.parse(localStorage.getItem('access_token'))}`,
            },
         },
      );
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
