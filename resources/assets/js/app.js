
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueRouter from 'vue-router';

window.Vue = require('vue');
Vue.use(VueRouter);

// Vue router

const Posts = require('./components/Posts.vue');
const Users = require('./components/Users.vue');

const routes = [
    { path: '/posts', component: Posts },
    { path: '/users', component: Users }
];

const router = new VueRouter({
    routes: routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    router: router
});
