import * as httpRequest from '~/utils/httpRequest';
export const get = async (code) => {
   try {
      const res = await httpRequest.get(`discount/check/` + code, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
