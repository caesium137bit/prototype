<template>
  <div>
    <ShgHeader></ShgHeader>
    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
  </div>
</template>

<script>
import ShgHeader from './components/organisms/ShgHeader.vue'

export default {
  components: {
    ShgHeader
  }
}
</script>
