<template> 
  <div class="card mx-auto" style="max-width: 25rem;">
      <h4 class="card-header">クイズの長さ {{quizLen}} Section{{section[sectionNo].id}} {{section[sectionNo].title}} Part{{section[sectionNo].quizzes[quizNo].order}}</h4>
      <img class="card-img-top" v-bind:src="section[sectionNo].quizzes[quizNo].image_src" alt="局面図">
      <div class="card-body">
        <div class="list-group">     
          <button type="button" class="list-group-item list-group-item-action list-group-item-primary text-center text-weight-bold active" v-bind:value="section[sectionNo].quizzes[quizNo].choices[choiceNo].choice" v-on:click="onClickChoice">{{section[sectionNo].quizzes[quizNo].choices[choiceNo].choice}}</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
      data: function () {
          return {
              section: [],
              sectionID: 1,             
              sectionNo: 0,
              quizNo: 0,
              choiceNo: 0,
              correctCount: 0
          }
      },     
      computed: {
          quizLen: function () {
              return Object.keys(this.section).length
          }
      },
      methods: {
          getSection() {
              axios.get('/api/quizzes?id=' + this.sectionID)
                  .then((res) => {
                      this.section = res.data;
                  });
          },
          onClickChoice: function (event) {
              this.quizNo += 1
          }
      },
      mounted() {
          this.getSection();
      }
  }
</script>