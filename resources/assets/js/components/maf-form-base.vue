<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div>
        <section id="location-form-step" class="container location" v-show="step == 'location'">
            <maf-form-location></maf-form-location>
        </section>
        <section id="lead-type-form-step" class="container lead-type extra-padding" v-show="step == 'lead-type'">
            <maf-form-lead-type></maf-form-lead-type>
        </section>
        <section id="agent-hero-form-step" class="container agent-hero extra-padding" v-show="step == 'agent-hero'">
            <maf-form-agent-hero></maf-form-agent-hero>
        </section>
        <section id="basic-personal-info-form-step" class="container basic-personal-info extra-padding" v-show="step == 'basic-info'">
            <maf-form-basic-info></maf-form-basic-info>
        </section>
        <section id="contact-personal-info-form-step" class="container contact-personal-info extra-padding" v-show="step == 'contact-info'">
            <maf-form-contact-info></maf-form-contact-info>
        </section>
        <section id="home-type-form-step" class="container home-type extra-padding" v-show="step == 'home-type'">
            <maf-form-home-type></maf-form-home-type>
        </section>
        <section id="preferences-form-step" class="container preferences extra-padding" v-show="step == 'preferences'">
            <maf-form-preferences></maf-form-preferences>
        </section>
        <section id="price-range-form-step" class="container price-range extra-padding" v-show="step == 'price-range'">
            <maf-form-price-range></maf-form-price-range>
        </section>
        <section id="time-frame-form-step" class="container time-frame extra-padding" v-show="step == 'time-frame'">
            <maf-form-time-frame></maf-form-time-frame>
        </section>
        <section id="status-form-step" class="container status extra-padding" v-show="step == 'status'">
            <maf-form-status></maf-form-status>
        </section>
        <section id="searching-form-step" class="container searching extra-padding" v-show="step == 'searching'">
            <maf-form-searching></maf-form-searching>
        </section>
        <div id="progress-bar"
             v-bind:class="{ 'loaded-10': getProgress(10), 'loaded-20': getProgress(20), 'loaded-30': getProgress(30), 'loaded-40': getProgress(40), 'loaded-50': getProgress(50), 'loaded-60': getProgress(60), 'loaded-70': getProgress(70), 'loaded-80': getProgress(80), 'loaded-90': getProgress(90), 'loaded-100': getProgress(100) }"
             v-show="progress > 0">
            <span>{{ progress }}% Complete</span>
            <div class="completion"></div>
        </div>
    </div>
</template>
<script>
    export default{
        mounted: function() {
            this.updateProgress();
        },
        data() {
            var storeStep = 'location';
            var params = window.location.pathname.substr(1).split('/');
            if (params[0] == 'location' && typeof params[1] != 'undefined') {
                storeStep = params[1];
            }
            return {
                vueRoot: this.$parent.$parent,
                step: storeStep,
                progress: 0
            }
        },
        methods: {
            nextStep: function() {
                switch (this.step) {
                    case 'location':
                        this.step = 'lead-type';
                        break;
                    case 'lead-type':
                        if (this.vueRoot.lead.lead_type) {
                            this.step = 'preferences';
                        } else {
                            this.step = 'price-range';
                        }
                        break;
                    case 'preferences':
                        this.step = 'price-range';
                        break;
                    case 'price-range':
                        this.step = 'home-type';
                        break;
                    case 'home-type':
                        this.step = 'time-frame';
                        break;
                    case 'time-frame':
                        this.step = 'agent-hero';
                        break;
                    case 'agent-hero':
                        this.step = 'basic-info';
                        break;
                    case 'basic-info':
                        this.step = 'contact-info';
                        break;
                    case 'contact-info':
                        if (this.vueRoot.lead.lead_type) {
                            this.step = 'status';
                        } else {
                            this.step = 'searching';
                            this.vueRoot.sendLead();
                        }
                        break;
                    case 'status':
                        this.step = 'searching';
                        this.vueRoot.sendLead();
                        break;
                    case 'searching':
                        this.step = 'location';
                        break;
                }
                this.updateProgress();
                if (this.step != 'location') {
                    history.pushState("", "", "/location/" + this.step);
                } else {
                    history.pushState("", "", "/location/");
                }
                this.vueRoot.lead.save();
            },
            updateProgress: function() {
                this.progress = 0;
                switch (this.step) {
                    case 'location':
                        this.progress = 0;
                        break;
                    case 'lead-type':
                        this.progress = 10;
                        break;
                    case 'preferences':
                        this.progress = 20;
                        break;
                    case 'price-range':
                        this.progress = 40;
                        break;
                    case 'agent-hero':
                        this.progress = 70;
                        break;
                    case 'basic-info':
                        this.progress = 80;
                        break;
                    case 'contact-info':
                        this.progress = 90;
                        break;
                    case 'home-type':
                        this.progress = 50;
                        break;
                    case 'time-frame':
                        this.progress = 60;
                        break;
                    case 'status':
                        this.progress = 90;
                        break;
                    case 'searching':
                        this.progress = 100;
                        break;
                }
            },
            getProgress: function (value) {
                return value == this.progress;
            }
        }
    }
</script>
