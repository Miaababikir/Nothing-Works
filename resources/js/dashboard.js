/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VModal from 'vue-js-modal';

window.Vue = require('vue');

Vue.use(VModal);

Vue.component('posts', require('./components/Dashboard/Posts/Posts.vue').default);
Vue.component('create-post', require('./components/Dashboard/Posts/CreateForm.vue').default);
Vue.component('edit-post', require('./components/Dashboard/Posts/EditForm.vue').default);
Vue.component('posts', require('./components/Dashboard/Posts/Posts.vue').default);
Vue.component('post', require('./components/Dashboard/Posts/Post.vue').default);
Vue.component('tags', require('./components/Dashboard/Tags/Tags.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
