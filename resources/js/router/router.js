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
    name: 'home',
    component: ShgHome
  },
  {
    path: '/about',
    name: 'about',
    component: ShgAbout
  },
  {
    path: '/contact',
    name: 'contact',
    component: ShgContact
  },
  {
    path: '/information1',
    name: 'information1',
    component: ShgInformation1
  },
  {
    path: '/information2',
    name: 'information2',
    component: ShgInformation2
  },
  {
    path: '/quizzes:id',
    name: 'quizzes',
    component: ShgQuizzes
  },
  {
    path: '/select-quiz',
    name: 'select-quiz',
    component: ShgSelectQuiz
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router