<template>
  <div class="container py-4">
    <div class="card mx-auto" style="max-width: 25rem;">
      <h4 class="card-header">{{quizzes[0].title}}</h4>
    </div>
  </div>
</template>

<script>
  export default {
      data: function () {
          return {
              quizzes: []
          }
      },
      methods: {
          getQuizzes() {
              axios.get('/api/quizzes')
                  .then((res) => {
                      this.quizzes = res.data;
                  });
          },
      },
      mounted() {
          this.getQuizzes();
      }
  }
</script>