<template>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 teal_ce">

            <h1>One Last Thing! Are you Preapproved?</h1>

            <button class="btn-step center-block" @click="setStatus('Pre-Approved')">yes</button>
            <button class="btn-step center-block" @click="setStatus('Haven\'t Applied Yet')">no</button>
            <button class="btn-step center-block" @click="setStatus('I don\'t know')">not sure</button>
        </div>
    </div>
</template>
<script>
    export default{
        methods: {
            setStatus: function(status) {
                this.vueRoot.lead.status = status;
                var vueFormBase = this.$parent;
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
