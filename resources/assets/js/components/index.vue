<template>
    <div>
        <maf-navbar></maf-navbar>

        <div id="lead-generator" class="section-map-wrapper">
            <div id="map"></div>
            <div class="map-opacity-layer"></div>
            <section id="location" v-show="!vueRoot.googleMapRequested"></section>
            <maf-form-base></maf-form-base>
        </div>

        <div class="section-map-wrapper second-relation"></div>

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
