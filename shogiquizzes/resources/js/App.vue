<template>
  <div>
    <header>
      <ShgLogo></ShgLogo>
      <ShgNavigationVar></ShgNavigationVar>
    </header>
    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
  </div>
</template>

<script>
import ShgLogo from './components/atoms/ShgLogo.vue'
import ShgNavigationVar from './components/molecules/ShgNavigationVar.vue'

export default {
  components: {
    ShgLogo,
    ShgNavigationVar
  }
}
</script>
