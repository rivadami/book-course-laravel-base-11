import { createRouter, createWebHistory } from "vue-router";

import ListComponent from "./components/ListComponent.vue";
import SaveComponent from "./components/SaveComponent.vue";

const routes = [
    {
        name: 'list',
        path: '/vue',
        component: ListComponent
    },
    {
        name: 'save',
        path: '/vue/save/:slug?',
        component: SaveComponent
    },
    {
        name: 'edit',
        path: '/vue/edit/:slug?',
        component: SaveComponent
    },
    {
        name: 'create',
        path: '/vue/create/:slug?',
        component: SaveComponent
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router