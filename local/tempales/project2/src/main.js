import '@babel/polyfill'
import 'mutationobserver-shim'
import './plugins/bootstrap-vue'
import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false
//export const eventBus = createApp(App)

//createApp(App).mount('#app')

new Vue({
  render: h => h(App),
}).$mount('#app')
