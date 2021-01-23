<template> 
  <div class="container py-4">
    <div class="card border-primary mx-auto" v-if="!isEndSection">
      <div class="card-header border-primary">
        <h4>Section{{section[sectionNo].id}} {{section[sectionNo].title}} Part{{section[sectionNo].quizzes[quizNo].order}}</h4>
      </div>
      <img class="card-img-top" v-bind:src="section[sectionNo].quizzes[quizNo].image_src" alt="局面図">
      <div class="card-body">
        <div class="list-group" v-for="choice in section[sectionNo].quizzes[quizNo].choices"  v-bind:key="choice.id">     
          <button type="button" class="list-group-item list-group-item-action list-group-item-primary text-center text-weight-bold active" v-bind:value="choice.choice" v-on:click="onClickChoice($event)">{{choice.choice}}</button>
        </div>
      </div>
      <div class="card-footer border-primary">
        <h4>{{quizNo}}問中{{correctCount}}問正解!</h4>
      </div>
    </div>   
    
    <div class="card border-primary mx-auto" v-if="isEndSection">
      <div class="card-header border-primary">
        <h4 class="text-center font-weight-bold">最終結果</h4>
      </div>
      <div class="card-body">
        <p class="text-success text-center shg-result-p">{{quizNo}}問中{{correctCount}}問正解!</p>
      </div>
    </div>   
  </div>
</template>

<script>
  export default {
      data: function () {
          return {
              section: [],     
              sectionNo: 0,
              quizNo: 0,
              correctCount: 0,
              isEndSection: false
          }
      },     
      computed: {
          sectionId() {
              return this.$route.params.id;
          },
          quizLen: function () {
              return Object.keys(this.section[this.sectionNo].quizzes).length
          }
      },
      methods: {
          getSection() {
              axios.get('/api/quizzes?id=' + this.sectionId)
                  .then((res) => {
                      this.section = res.data;
                  });
          },
          onClickChoice: function (event) {
              if (event.target.value == this.section[this.sectionNo].quizzes[this.quizNo].correct) {
                  this.correctCount ++
              }
              this.quizNo ++
              if (this.quizNo == this.quizLen) {
                  this.isEndSection = true
              }
          }
      },
      mounted() {
          this.getSection();
      }
  }
</script>

<style scoped>
.shg-result-p {
  font-size: 2rem;
}
.card {
  max-width: 25rem;
}
</style>