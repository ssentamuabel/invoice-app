import './bootstrap';


import {createApp } from 'vue'
import router from './router/index.js'

import app from './components/app.vue'





createApp(app).use(router).mount("#app")