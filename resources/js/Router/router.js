import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



import Login from '../components/Auth/Login'
import SignUp from '../components/Auth/SignUp'
import Forum from '../components/Forum/Forum'
import Logout from "../components/Auth/Logout";
const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout },
    { path: '/signup', component: SignUp },
    { path: '/forum', component: Forum, name:'forum'},

]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history'
})

export default router
