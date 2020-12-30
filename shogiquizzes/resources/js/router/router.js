import Router from 'vue-router'
import ShgHome from '../components/ShgHome.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: ShgHome
    },
  ]
});