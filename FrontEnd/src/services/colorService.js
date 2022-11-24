import * as httpRequest from '~/utils/httpRequest';
export const all = async () => {
   try {
      const res = await httpRequest.get(`color`, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
export const getByPg = async (pg) => {
   try {
      const res = await httpRequest.get(`color/pg/` + pg, {});
      return res.data;
   } catch (error) {
      console.error(error);
   }
};
