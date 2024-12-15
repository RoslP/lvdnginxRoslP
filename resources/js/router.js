import {createRouter, createWebHistory} from 'vue-router';

// Определите маршруты
const routes = [

    {
        path: '/list', component: () => import('./components/List/Index.vue'),
        name: 'list.index'
    }
];

// Создайте роутер с использованием истории браузера
const router = createRouter({
    history: createWebHistory(),
    routes // массив маршрутов
});

export default router;
