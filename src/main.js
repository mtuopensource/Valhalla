import Vue from 'vue'
import App from './App.vue'

// Disable the production tip on Vue startup.
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
