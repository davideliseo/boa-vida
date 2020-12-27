require('./bootstrap');

import Vue from 'vue'

Vue.component('roles-selection', require('./components/RolesSelection.vue').default);

const app = new Vue({
    el: '#app',
});
