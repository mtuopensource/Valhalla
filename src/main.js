import Vue from 'vue'
import HomePage from './HomePage.vue'
import CardsPage from './CardsPage.vue'

// Disable the production tip on Vue startup.
Vue.config.productionTip = false

if(wp_page_template_slug == 'page-home.php') {
  new Vue({
    render: h => h(HomePage),
  }).$mount('#app')
} else if(wp_page_template_slug == 'page-cards.php') {
  new Vue({
    render: h => h(CardsPage),
  }).$mount('#app')
}
