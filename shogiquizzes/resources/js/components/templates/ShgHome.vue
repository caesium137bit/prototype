<template>
  <!-- メインビジュアル -->
  <div class="py-4">
    <div class="container">
      <!-- カルーセル外枠 -->
      <div id="main_visual" class="carousel slide" data-ride="carousel" bg>
        <!-- インジケーター -->
        <ol class="carousel-indicators">
          <li data-target="#main_visual" data-slide-to="0" class="active"></li>
          <li data-target="#main_visual" data-slide-to="1"></li>
          <li data-target="#main_visual" data-slide-to="2"></li>
        </ol>
        <!-- / インジケーター -->
        <!-- カルーセル内枠 -->
        <div class="carousel-inner">
          <!-- スライド01 -->
          <div class="carousel-item active">
            <img class="img-fluid d-block mx-auto" :src="'/images/main1.png'" alt="局面図1">
            <div class="carousel-caption d-none d-md-block">
              <h2>コンテンツ1</h2>
              <p>キャプション1</p>
            </div>
          </div>
          <!-- / スライド01 -->
          <!-- スライド02 -->
          <div class="carousel-item">
            <img class="img-fluid d-block mx-auto" :src="'/images/main2.png'" alt="局面図2">
            <div class="carousel-caption d-none d-md-block">
              <h2>コンテンツ2</h2>
              <p>キャプション2</p>
            </div>
          </div>
          <!-- / スライド02 -->
          <!-- スライド03 -->
          <div class="carousel-item">
            <img class="img-fluid d-block mx-auto" :src="'/images/main3.png'" alt="局面図3">
            <div class="carousel-caption d-none d-md-block">
              <h2>コンテンツ3</h2>
              <p>キャプション3</p>
            </div>
          </div>
          <!-- / スライド03 -->
        </div>
        <!-- / カルーセル内枠 -->
        <!-- コントローラー -->
        <a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">前に戻る</span>
        </a>
        <a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">次に進む</span>
        </a>
        <!-- / コントローラー -->
      </div>
      <!-- / カルーセル外枠 -->
    </div>
  </div>
  <!-- / メインビジュアル -->
</template>

<script>
  export default {}
</script>