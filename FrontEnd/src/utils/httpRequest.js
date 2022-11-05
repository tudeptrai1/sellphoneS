import axios from 'axios';

const httpRequest = axios.create({
   baseURL: process.env.REACT_APP_BASE_URL,
});

export const get = async (path, options = {}) => {
   const response = await httpRequest.get(path, options);
   return response.data;
};
export const login = async (data) => {
   // return axios
   //    .post(`${baseURL}/api/auth`, { name: data.name, password: data.password })
   //    .then((response) => {
   //       localStorage.setItem('x-access-token', response.data.token);
   //       localStorage.setItem('x-access-token-expiration', Date.now() + 2 * 60 * 60 * 1000);
   //       return response.data;
   //    })
   //    .catch((err) => Promise.reject('Authentication Failed!'));
};
export default httpRequest;
