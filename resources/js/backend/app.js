require("./bootstrap");
require("./fontawesome.min.js");
import Vue from "vue";
import App from "./views/App";
import { Form, HasError, AlertError } from "vform";
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

import router from "./router/router.js";
import VueProgressBar from "vue-progressbar";
const options = {
    color: "#007bff",
    failedColor: "red",
    thickness: "3px",
    transition: {
        speed: "0.3s",
        opacity: ".9",
        termination: 300
    },
    autoRevert: true,
    location: "top",
    inverse: false
};
Vue.use(VueProgressBar, options);

import Swal from "sweetalert2";
window.swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: toast => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    }
});
window.Toast = Toast;

new Vue({
    router
}).$mount("#app");
