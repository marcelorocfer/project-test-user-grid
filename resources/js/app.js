require('./bootstrap');

import store from "./store";

window.Vue = require('vue');
window.axios = require('axios');

window.BASE_URL="http://localhost:8000/"

Vue.component('login-form', require('./components/loginForm').default);
Vue.component('users-component', require('./components/Users').default);
Vue.component('app-container', require('./components/appContainer').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    store,
    el: '#app',
});
