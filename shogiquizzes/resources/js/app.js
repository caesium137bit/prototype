require('./bootstrap');

import Vue from 'vue';

import router from './router/router'

import store from './store/store'

import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);

import App from './App.vue'


new Vue({
  el: '#app',
  router, 
  components: { App }, 
  template: '<App />' 
})