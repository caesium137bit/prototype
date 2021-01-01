<template>
  <div class="container py-4">
    <!-- カードの枠：card -->
    <div class="card mx-auto" style="max-width: 25rem;">
      <!-- カード上部にレイアウトされる画像：card-img-top -->
      <img class="card-img-top" :src="'/images/kyokumen/1-1.png'" alt="1-1">
      <!-- カード本文：card-body -->
      <div class="card-body">
        <!-- カード見出し：card-title -->
        <h4 class="card-title">問題集1問題1</h4>
        <!-- カードの内容文：card-text -->
        <p class="card-text">問題選択肢</p>
        <a href="#" class="btn btn-primary">次へ</a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {}
</script>