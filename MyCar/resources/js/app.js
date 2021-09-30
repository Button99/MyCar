require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('vehicles', require('./components/Vehicles.vue').default);
const app = new Vue({
    el: '#app',
});
