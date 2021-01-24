<template>
  <header>
    <ShgLogo></ShgLogo>
    <ShgNavigationVar></ShgNavigationVar> 
  </header>
</template>

<script>
import ShgLogo from '../atoms/ShgLogo.vue'
import ShgNavigationVar from '../molecules/ShgNavigationVar.vue'

export default {
  components: {
    ShgLogo,
    ShgNavigationVar
  }
}
</script>