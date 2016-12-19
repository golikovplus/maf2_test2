<template>
    <div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 teal_ce">
                <h1>What are you looking to do?</h1>

                <button class="btn-step center-block" @click="setLeadTypeBuy()">buy</button>
                <button class="btn-step center-block" @click="setLeadTypeSell()">sell</button>

                <a href="https://www.ziprealty.com/">Neither, I Plan on Renting</a>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">
                <h2>Agents ussually specialize in buying or selling. This will help us find the right agent for you!</h2>
                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">250</span> <br />
                    Answer more questions to find the best match!
                </p>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        methods: {
            setLeadTypeBuy: function() {
                var vueFormBase = this.$parent;
                this.vueRoot.lead.lead_type = true;
                vueFormBase.nextStep();
            },
            setLeadTypeSell: function() {
                var vueFormBase = this.$parent;
                this.vueRoot.lead.lead_type = false;
                vueFormBase.nextStep();
            }
        },
        data() {
            return {
                vueRoot: this.$parent.$parent.$parent
            }
        }
    }
</script>
