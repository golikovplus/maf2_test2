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
            if (localStorage['step']) storeStep = localStorage['step'];
            return {
                step: storeStep,
                progress: 0
            }
        },
        methods: {
            created: function() {
                this.updateProgress();
            },
            nextStep: function(param) {
                switch (this.step) {
                    case 'location':
                        this.step = 'lead-type';
                        break;
                    case 'lead-type':
                        if (param == 'buy') {
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
                }
                this.updateProgress();
                localStorage['step'] = this.step;
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
                        this.progress = 90;
                        break;
                    case 'basic-info':
                        this.progress = 90;
                        break;
                    case 'contact-info':
                        this.progress = 90;
                        break;
                    case 'home-type':
                        this.progress = 50;
                        break;
                    case 'time-frame':
                        this.progress = 90;
                        break;
                }
            },
            getProgress: function (value) {
                return value == this.progress;
            }
        }
    }
</script>
