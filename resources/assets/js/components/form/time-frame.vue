<template>
    <div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 teal_ce">

                <h1 v-show=" get_is_buyer()">When are you looking to move?</h1>
                <h1 v-show="!get_is_buyer()">When are you looking to sell your home?</h1>

                <button class="btn-step center-block" @click="setTimeFrame('asap')">asap</button>
                <button class="btn-step center-block" @click="setTimeFrame('within 3 months')">within 3 months</button>
                <button class="btn-step center-block" @click="setTimeFrame('within 6 months')">within 6 months</button>
                <button class="btn-step center-block" @click="setTimeFrame('within a year')">within a year</button>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">

                <h2 v-show=" get_is_buyer()">No matter when you are moving, we will help you find the best agent!</h2>
                <h2 v-show="!get_is_buyer()">No matter when you are planning on selling, we will help you find the best agent!</h2>

                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">63</span> <br />
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
            setTimeFrame: function(frame) {
                this.vueRoot.lead.time_frame = frame;
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
            get_is_buyer: function() {
                return this.vueRoot.lead.lead_type;
            },
        }
    }
</script>
