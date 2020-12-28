require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './router/router'
import store from './store/store'

import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);

window.Vue = require('vue');
Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    store
});;