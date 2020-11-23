import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    { path: "/", redirect: "dashboard" },
    {
        path: "/dashboard",
        component: () => import("../views/dashboard/dashboard.vue")
    },
    {
        path: "/profile",
        component: () => import("../views/profile/profile.vue")
    }
];

const router = new VueRouter({
    routes,

    linkActiveClass: "active"
});

export default router;
