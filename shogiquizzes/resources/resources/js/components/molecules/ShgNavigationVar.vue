<template>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img :src="'/favicon.ico'" width="30" height="30" class="d-inline-block align-top" alt="王将">
      AI将棋道場
    </a>
    <div class="collapse navbar-collapse justify-content-end">  
      <div class="navbar-nav">    
        <router-link class="nav-item nav-link" to="/">Home</router-link>
        <router-link class="nav-item nav-link" to="/about">About</router-link>
        <router-link class="nav-item nav-link" to="/works">Works</router-link>
        <router-link class="nav-item nav-link" to="/contact">Contact</router-link>        
      </div>     
    </div>  
  </nav>
</template>

<script>
  export default {}
</script>