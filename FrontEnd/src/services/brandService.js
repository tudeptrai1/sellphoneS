import * as httpRequest from '~/utils/httpRequest';
export const all = async () => {
   try {
      const res = await httpRequest.get(`brand`, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
