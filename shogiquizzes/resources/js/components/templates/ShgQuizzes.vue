<template> 
  <div class="card mx-auto" style="max-width: 25rem;">
      <h4 class="card-header">Section{{section[0].id}} {{section[0].title}} Part{{section[0].quizzes[0].order}}</h4>
      <img class="card-img-top" v-bind:src="section[0].quizzes[0].image_src" alt="局面図">
      <div class="card-body">
        <div class="list-group">     
          <button type="button" class="list-group-item list-group-item-action list-group-item-primary text-center text-weight-bold active" v-bind:value="section[0].quizzes[0].choices[0].choice">{{section[0].quizzes[0].choices[0].choice}}</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
      data: function () {
          return {
              section: []
          }
      },
      methods: {
          getSection() {
              axios.get('/api/quizzes')
                  .then((res) => {
                      this.section = res.data;
                  });
          },
      },
      mounted() {
          this.getSection();
      }
  }
</script>

<div class="container py-4">
    <div class="card mx-auto" style="max-width: 25rem;">
      <h4 class="card-header">{{quizzes[0].title}}</h4>
    </div>
  </div>
  