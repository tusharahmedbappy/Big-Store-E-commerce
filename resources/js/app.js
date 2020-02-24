require('./bootstrap');
window.Vue = require("vue");

import  router from './Route';
const  app = new Vue({
    el: '#app',
    router,
});
