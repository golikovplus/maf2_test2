<template>
    <div>
        <maf-navbar></maf-navbar>

        <div id="lead-generator" class="section-map-wrapper">
            <div id="map"></div>
            <div class="map-opacity-layer"></div>
            <section id="location" v-show="!googleMapRequested"></section>
            <maf-form-base></maf-form-base>
        </div>

        <div class="section-map-wrapper second-relation"></div>

        <maf-our-customers-section v-show="!googleMapRequested"></maf-our-customers-section>
        <maf-blog-latest-section v-show="!googleMapRequested"></maf-blog-latest-section>
        <maf-partners-section v-show="!googleMapRequested"></maf-partners-section>

        <maf-footer></maf-footer>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                googleMapRequested: false
            }
        },
        methods: {
            get_vue_form: function() {
                return this.$children[1];
            }
        }
    }
</script>
