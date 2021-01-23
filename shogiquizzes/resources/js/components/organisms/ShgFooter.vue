<template>
  <footer class="py-4 bg-dark text-light">
  <div class="container text-center">
    <!-- ナビゲーション -->
    <ul class="nav justify-content-center mb-3">
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
        <a class="nav-link dropdown-toggle" href="#" id="footerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Information
        </a>
        <div class="dropdown-menu" aria-labelledby="footerDropdown">
          <router-link class="dropdown-item" :to="{ name: 'information1' }">Information1</router-link>
          <router-link class="dropdown-item" :to="{ name: 'information2' }">Information2</router-link>
        </div>
      </li>
    </ul>
    <!-- /ナビゲーション -->
    <p><small>Copyright &copy;2021 著作権帰属先未定, All Rights Reserved.</small></p>
  </div>
</footer>
</template>

<script>
  export default {}
</script>