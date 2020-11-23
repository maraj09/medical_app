require('./bootstrap');
require("./fontawesome.min.js");
import Vue from "vue";
import router from "./router/router.js";
import App from './views/App';


Vue.component('example-component', require('./components/ExampleComponent.vue').default);



new Vue({
    router,
    
}).$mount('#app')

