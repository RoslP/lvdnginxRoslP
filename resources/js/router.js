import {createRouter, createWebHistory} from 'vue-router';

// Определите маршруты
const routes = [

    {
        path: '/list', component: () => import('./components/List/Index.vue'),
        name: 'list.index'
    },
    {
        path: '/users/login', component: () => import('./components/User/Login.vue'),
        name: 'users.login'
    },
    {
        path: '/users/registration', component: () => import('./components/User/Registration.vue'),
        name: 'users.registration'
    },
    {
        path: '/users/personal', component: ()=> import('./components/User/Personal.vue'),
        name: 'users.personal'
    }
];

// Создайте роутер с использованием истории браузера
const router = createRouter({
    history: createWebHistory(),
    routes // массив маршрутов
});

export default router;
