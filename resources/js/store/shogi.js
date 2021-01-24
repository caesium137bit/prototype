const state = {
  sectionId: 0
}

const getters = {}

const mutations = {
  changeSectionId (state, value) {
      state.sectionId = value
    }
}

const actions = {}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}