
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('maf-navbar', require('./components/maf-navbar.vue'));
Vue.component('maf-our-customers-section', require('./components/maf-our-customers-section.vue'));
Vue.component('maf-blog-latest-section', require('./components/maf-blog-latest-section.vue'));
Vue.component('maf-partners-section', require('./components/maf-partners-section.vue'));
Vue.component('maf-footer', require('./components/maf-footer.vue'));
Vue.component('maf-app', require('./components/index.vue'));

Vue.component('maf-location-form-base', require('./components/maf-location-form-base.vue'));
Vue.component('maf-location-form', require('./components/maf-location-form.vue'));

const app = new Vue({
    el: '#app'
});
