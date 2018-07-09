

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';
import UIkit from 'uikit';
// UIkit.use(Icons);


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var articlecard = Vue.component('articlecard', require('./components/ArticleCard.vue'));
var gallerycard = Vue.component('gallerycard', require('./components/GalleryCard.vue'));
var componentcard = Vue.component('componentcard', require('./components/ComponentCard.vue'));
var mytable = Vue.component('mytable', require('./components/mytable.vue'));
var Sidebar = Vue.component('Sidebar', require('./components/Sidebar.vue'));


const app = new Vue({
    el: '#app',

    //components: {alias: reference},
});