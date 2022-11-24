import axios from 'axios';
export const getToken = () =>
   localStorage.getItem('access_token') ? JSON.parse(localStorage.getItem('access_token')) : null;
export const getAuthorizationHeader = () => `Bearer ${getToken()}`;
const headers = {
   Authorization: `Bearer ${getToken()}`,
};
const httpRequest = axios.create({
   baseURL: process.env.REACT_APP_BASE_URL,
   headers: headers,
});
axios.interceptors.response.use(
   (response) => {
      return response;
   },
   (error) => {
      if (error.response) {
         if (error.response.status === 401) {
         }
      }
      return error;
   },
);
export const get = async (path, options = {}) => {
   const response = await httpRequest.get(path, options);
   return response.data;
};
export const post = async (path, options = {}) => {
   const response = await httpRequest.post(path, options);
   return response.data;
};

export default httpRequest;
