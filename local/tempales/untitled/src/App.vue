<template>
  <div class="container" id="app">
    <Dop />
    <HelloWorld link="https://vuejs.org"/>
    <Zametki/>
    <Dop />
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Zametki from './components/Zametki.vue'
import Dop from './components/Dop.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
    Zametki,
    Dop
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
}
.container {
  margin: 0 auto;
  max-width: 1000px;
}
</style>
