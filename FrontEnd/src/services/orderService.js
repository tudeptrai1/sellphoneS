import * as httpRequest from '~/utils/httpRequest';
import axios from 'axios';

export const create = async (
   user_id,
   payment_method,
   receive_name,
   receive_phone,
   province,
   ward,
   district,
   detail,
   payment_id,
   products,
) => {
   try {
      const res = await axios.post(
         process.env.REACT_APP_BASE_URL + 'order/add',
         {
            user_id,
            payment_method,
            receive_name,
            receive_phone,
            province,
            ward,
            district,
            detail,
            payment_id,
            products,
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
