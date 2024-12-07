import {createRouter, createWebHistory} from 'vue-router';
import PostComponent from "@/components/PostComponent.vue";
import TagComponent from "@/components/TagComponent.vue";

// Импортируйте компоненты, которые хотите использовать в роутинге

// Определите маршруты
const routes = [
    {path: '/1', component: PostComponent},
    {path: '/tag', component: TagComponent},
    {
        path: '/people', component: ()=> import('./components/Person/Index.vue'),
        name: 'person.index'
    },
    {
        path: '/people/create', component: ()=> import('./components/Person/Create.vue'),
        name: 'person.create'
    },
    {
        path: '/people/:id/edit',component: ()=> import('./components/Person/Edit.vue'),
        name: 'person.edit'
    },
    {
        path: '/people/:id',component: ()=>import('./components/Person/Show.vue'),
        name: 'person.show'
    }
];

// Создайте роутер с использованием истории браузера
const router = createRouter({
    history: createWebHistory(),
    routes // массив маршрутов
});

export default router;
