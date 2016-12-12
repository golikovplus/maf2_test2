<template>
    <div>
        <maf-navbar></maf-navbar>

        <section id="location" v-show="!googleMapRequested">
        </section>
        <div id="lead-generator" class="section-map-wrapper">
          <div id="map"></div>
          <div class="map-opacity-layer"></div>
        </div>

        <maf-location-form-base></maf-location-form-base>

        <div style="height: 730px;"></div>

        <maf-our-customers-section></maf-our-customers-section>
        <maf-blog-latest-section></maf-blog-latest-section>
        <maf-partners-section></maf-partners-section>

        <maf-footer></maf-footer>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                googleMapRequested: false
            }
        }
    }
</script>
