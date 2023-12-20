import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Axios from './plugins/axios';

const app = createApp(App)

app.use(router);
app.config.globalProperties.$axios = Axios;

app.mount('#app')
