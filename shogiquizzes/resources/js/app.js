require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './router/router'

window.Vue = require('vue');
Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router
});;