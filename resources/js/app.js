require('./bootstrap');
import Vue from 'vue'

Vue.component('roles-selection', require('./components/RolesSelection.vue').default);
Vue.component('drop-down-multi', require('./components/DropDownMulti.vue').default);
Vue.component('drop-down-single', require('./components/DropDownSingle.vue').default);

const app = new Vue({
    el: '#app',
});
