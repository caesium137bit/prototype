import Vue from 'vue'
import VueRouter from 'vue-router'

import ShgHome from '../components/templates/ShgHome.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: ShgHome
  },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router