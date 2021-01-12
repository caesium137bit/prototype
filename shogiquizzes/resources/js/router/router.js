import Vue from 'vue'
import VueRouter from 'vue-router'

import ShgHome from '../components/templates/ShgHome.vue'
import ShgAbout from '../components/templates/ShgAbout.vue'
import ShgContact from '../components/templates/ShgContact.vue'
import ShgInformation1 from '../components/templates/ShgInformation1.vue'
import ShgInformation2 from '../components/templates/ShgInformation2.vue'
import ShgQuizzes from '../components/templates/ShgQuizzes.vue'
import ShgSelectQuiz from '../components/templates/ShgSelectQuiz.vue'


Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: ShgHome
  },
  {
    path: '/about',
    component: ShgAbout
  },
  {
    path: '/contact',
    component: ShgContact
  },
  {
    path: '/information1',
    component: ShgInformation1
  },
  {
    path: '/information2',
    component: ShgInformation2
  },
  {
    path: '/quizzes',
    component: ShgQuizzes
  },
  {
    path: '/select-quiz',
    component: ShgSelectQuiz
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router