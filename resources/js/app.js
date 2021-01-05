require('./bootstrap');
require('alpinejs');
import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init({
  showSpinner: true
})



Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(plugin)

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)