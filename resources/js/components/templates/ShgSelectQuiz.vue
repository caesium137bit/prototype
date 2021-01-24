<template> 
  <div>
    <div class="list-group" v-for="section in sections"  v-bind:key="section.id">
      <button class="list-group-item list-group-item-action" v-on:click="$router.push({ name: 'quizzes', params: { id: section.id }})">問題集番号:{{section.id}}/題名:{{section.title}}</button>
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
          }
      },
      mounted() {
          this.getSections();
      }
  }
</script>