import * as httpRequest from '~/utils/httpRequest';
export const search = async (name, limit, min, max, amount, brand, color, memory, orderPrice, orderName, discount) => {
   try {
      const res = await httpRequest.get(`product/search`, {
         params: {
            name,
            limit,
            min,
            max,
            amount,
            brand,
            color,
            memory,
            orderPrice,
            orderName,
            discount,
         },
      });
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
