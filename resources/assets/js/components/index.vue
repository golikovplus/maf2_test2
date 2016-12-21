<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div>
        <div id="lead-generator" class="section-map-wrapper" v-bind:class="{ 'mobile-hidden': (vueRoot.googleMapRequested) }">
            <maf-navbar></maf-navbar>

            <div id="map"></div>
            <div class="map-opacity-layer"></div>
            <section id="location" v-show="!vueRoot.googleMapRequested"></section>
            <maf-form-base></maf-form-base>
        </div>

        <div class="section-map-wrapper second-relation" v-bind:class="{ 'mobile-hidden': (vueRoot.googleMapRequested) }"></div>

        <maf-top-local-agent v-show="!vueRoot.googleMapRequested"></maf-top-local-agent>
        <maf-why-use v-show="!vueRoot.googleMapRequested"></maf-why-use>
        <maf-our-customers-section v-show="!vueRoot.googleMapRequested"></maf-our-customers-section>
        <maf-blog-latest-section v-show="!vueRoot.googleMapRequested"></maf-blog-latest-section>
        <maf-partners-section v-show="!vueRoot.googleMapRequested"></maf-partners-section>

        <maf-footer></maf-footer>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                vueRoot: this.$parent
            }
        },
        methods: {
            get_vue_form: function() {
                return this.$children[1];
            }
        }
    }
</script>
