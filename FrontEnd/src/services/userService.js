import * as httpRequest from '~/utils/httpRequest';
export const login = async (email, password) => {
   try {
      const res = await httpRequest.post(`user`, {
         email,
         password,
      });
      return res;
   } catch (error) {
      console.error(error);
   }
};
export const register = async (full_name, email, phone, password, address) => {
   try {
      const res = await httpRequest.post(`register`, {
         full_name,
         email,
         phone,
         password,
         address,
      });
      return res;
   } catch (error) {
      console.error(error);
   }
};
