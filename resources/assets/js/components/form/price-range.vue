<template>
    <div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 teal_ce">

                <h1 v-show=" get_is_buyer()">How much are you looking to spend?</h1>
                <h1 v-show="!get_is_buyer()">What is the approximate value of your home?</h1>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-ms-6 teal_ri">
                            <button class="btn-step" @click="setPriceRange('Under $200,000')">Under $200K</button>
                            <button class="btn-step" @click="setPriceRange('$400,000 - $600,000')">$400K - $600K</button>
                            <button class="btn-step" @click="setPriceRange('$800,000 - $1,000,000')">$800K - $1M</button>
                        </div>
                        <div class="col-md-6 col-xs-6 col-ms-6 teal_le">
                            <button class="btn-step" @click="setPriceRange('$200,000 - $400,000')">$200K - $400K</button>
                            <button class="btn-step" @click="setPriceRange('$600,000 - $800,000')">$600K - $800K</button>
                            <button class="btn-step" @click="setPriceRange('Over $1,000,000')">Over 1M</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">

                <h2 v-show=" get_is_buyer()">At MyAgentFinder our agents save buyers $23k* on average when buying a home.</h2>
                <h2 v-show="!get_is_buyer()">At MyAgentFinder our agents earn their sellers $7.5k* more dollars for there homes.</h2>

                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">280</span> <br />
                    Answer more questions to find the best match!
                </p>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                vueRoot: this.$parent.$parent.$parent
            }
        },
        methods: {
            get_is_buyer: function() {
                return this.vueRoot.lead.lead_type;
            },
            setPriceRange: function(range) {
                this.vueRoot.lead.price_range = range;
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
        }
    }
</script>
