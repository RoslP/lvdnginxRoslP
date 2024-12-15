import './bootstrap';
import { createApp } from 'vue';
import Index from './components/Index.vue';
import router from "./router.js";

const app = createApp(Index); // Прямо передаем компонент без использования 'components'

app.use(router)
app.mount('#app');
