/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);
import TrucksIndex from './components/trucks/TrucksIndex.vue';
import TrucksShow from './components/trucks/TrucksShow.vue';

const routes = [
    {
        path: '/',
        components: {
            trucksIndex: TrucksIndex
        }
    },
    {path: '/:id', component: TrucksShow, name: 'TrucksShow'},
]

const router = new VueRouter({routes})

const app = new Vue({router}).$mount('#app')
