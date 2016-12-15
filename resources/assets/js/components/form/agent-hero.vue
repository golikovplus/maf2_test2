<template>
    <div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 teal_ce">

                <h1>Is anyone in your home an active/former member of the military?</h1>

                <button class="btn-step center-block" @click="setAgentHero(true)">yes</button>
                <button class="btn-step center-block" @click="setAgentHero(false)">no</button>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">

                <h2>We partner with Agent Hero to connect military families with Agents who have served.</h2>

                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">35</span> <br />
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
            setAgentHero: function(value) {
                this.vueRoot.lead.agent_hero = value;
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
            get_is_buyer: function() {
                return this.vueRoot.lead.lead_type;
            },
        }
    }
</script>
