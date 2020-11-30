require('./bootstrap');
require("./fontawesome.min.js");
import Vue from "vue";
import App from './views/App';
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import router from "./router/router.js";


new Vue({
    router,
    
}).$mount('#app')

