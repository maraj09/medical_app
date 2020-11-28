import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);
//Importing Routes--------------------------------------------
import Dashboard from "../views/dashboard/dashboard";
import Profile from "../views/profile/profile";


const routes = [
    { path: "/", redirect: "dashboard" },
    {
        path: "/dashboard",
        component: Dashboard
    },
    {
        path: "/profile",
        component: Profile
    }
];

const router = new VueRouter({
    routes,

    linkActiveClass: "active"
});

export default router;
