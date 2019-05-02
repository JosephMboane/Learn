
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import PessoaPerdidaComponent from './components/pessoaPerdida/PessoaPerdidaComponent.vue';
import PessoaPerdidaCreateComponent from './components/pessoaPerdida/PessoaPerdidaCreateComponent.vue';
// import HeaderComponent from './components/nav/HeaderComponent.vue';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const routes = [
    {
        path: '/',
        components: {
            pessoaPerdidaComponent: PessoaPerdidaComponent
        }
    },
    {path: '/pessoaPerdida/create', component: PessoaPerdidaCreateComponent, name: 'createPessoaPerdida'},
    // {path: '/pessoaPerdida/index', component: PessoaPerdida, name: 'editCompany'},
]

/* Importação de rotas*/

// import router from './router'
// import router from './router/basic'

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('pessoa-perdida', require('./components/pessoaPerdida/PessoaPerdidaComponent.vue'));
// Vue.component('pessoa-perdida-create', require('./components/pessoaPerdida/PessoaPerdidaCreateComponent.vue'));
// Vue.component('header-component', require('./components/nav/HeaderComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
