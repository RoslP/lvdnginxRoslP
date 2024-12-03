import './bootstrap';
import {createApp} from 'vue';

import PostComponent from './components/PostComponent.vue';

const app = createApp({
    components: {PostComponent}
});

app.mount('#app');
