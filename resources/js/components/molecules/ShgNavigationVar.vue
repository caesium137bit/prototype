<template>
  <!-- ナビゲーションバー -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <!-- サブコンポーネント -->
  <div class="container">
    <!-- ブランド -->
    <router-link class="navbar-brand" :to="{ name: 'home' }">
      <img :src="'/favicon.ico'" width="30" height="30" class="d-inline-block align-top" alt="王将">
      AI将棋道場
    </router-link>
    <!-- 切替ボタン -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- ナビゲーション -->
    <div class="collapse navbar-collapse" id="navbar-content">
      <!-- ナビゲーションメニュー -->
      <!-- 左側メニュー：トップページの各コンテンツへのリンク -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'about' }">About</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'contact' }">Contact</router-link>
        </li>
        <!-- ドロップダウン -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Information
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <router-link class="dropdown-item" :to="{ name: 'information1' }">Information1</router-link>
            <router-link class="dropdown-item" :to="{ name: 'information2' }">Information2</router-link>
          </div>
        </li>
      </ul>

      <!-- 右側メニュー：Contactページへのリンク -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link class="nav-link btn btn-info" :to="{ name: 'select-quiz' }">将棋次の一手</router-link>
        </li>
      </ul>
      <!-- /ナビゲーションメニュー -->
    </div>
  </div>
  <!-- /サブコンポーネント -->
</nav>
<!-- /ナビゲーションバー -->
</template>

<script>
  export default {}
</script>