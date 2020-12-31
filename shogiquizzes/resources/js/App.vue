<template>
  <div>
    <ShgHeader></ShgHeader>
    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
    <ShgFooter></ShgFooter>
  </div>
</template>

<script>
import ShgHeader from './components/organisms/ShgHeader.vue'
import ShgFooter from './components/organisms/ShgFooter.vue'

export default {
  components: {
    ShgHeader,
    ShgFooter
  }
}
</script>
