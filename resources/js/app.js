require('./bootstrap');
import Vue from 'vue'

Vue.component('roles-selection', require('./components/RolesSelection.vue').default);
Vue.component('drop-down', require('./components/DropDown.vue').default);
Vue.component('select-supplier', require('./components/SelectSupplier.vue').default);

const app = new Vue({
    el: '#app',
});
