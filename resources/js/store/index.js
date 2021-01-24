import Vue from 'vue'
import Vuex from 'vuex'

import shogi from './shogi'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    shogi
  }
})

export default store