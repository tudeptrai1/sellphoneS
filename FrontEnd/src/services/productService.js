import * as httpRequest from '~/utils/httpRequest';
export const all = async () => {
   try {
      const res = await httpRequest.get(`product`, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const get = async (id) => {
   try {
      const res = await httpRequest.get(`product/get/` + id, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const detail = async (group) => {
   try {
      const res = await httpRequest.get(`product/pg/` + group, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const brand = async (brand) => {
   try {
      const res = await httpRequest.get(`product/brand/` + brand, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const cart = async (user) => {
   try {
      const res = await httpRequest.get(`product/cart/` + user, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
