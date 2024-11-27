import { createApp } from "vue";

import Oruga from '@oruga-ui/oruga-next'
import '../../css/vue.css'
import '@oruga-ui/theme-oruga/dist/oruga-full.min.css'
import '@mdi/font/css/materialdesignicons.min.css'

import axios from "axios";

import App from "./App.vue"

import router from "./router";

const app = createApp(App)
app.use(Oruga).use(router)

app.config.globalProperties.$axios = axios
window.axios = axios

app.mount("#app")