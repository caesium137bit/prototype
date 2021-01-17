<template> 
  <div>
    <div class="list-group" v-for="section in sections"  v-bind:key="section.id">
      <router-link class="list-group-item list-group-item-action" to="/quizzes" v-bind:value="section.id" v-on:click.native="onClickSection($event)">{{section.id}}:{{section.title}}</router-link>
    </div>
  </div>
</template>

<script>
  export default {
      data: function () {
          return {
              sections: []
          }
      },     
      methods: {
          getSections() {
              axios.get('/api/select-quiz')
                  .then((res) => {
                      this.sections = res.data;
                  });
          },
          onClickSection: function (event) {
              this.$store.commit('shogi/changeSectionId', 1);
          }
      },
      mounted() {
          this.getSections();
      }
  }
</script>