import axios from 'axios';

const env = import.meta.env;

axios.defaults.baseURL = env.VITE_REQUESTS_API;
axios.interceptors.request.use((config) => {
    // console.log(config);
    return config;
});
axios.interceptors.response.use(function (response) {
    return response;
},function (error) {
    console.log(error);
    return Promise.reject(error);
});

export default axios;