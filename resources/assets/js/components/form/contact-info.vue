<template>
    <div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-ms-12 col-xs-12 col-ms-offset-0 col-xs-offset-0 teal_ce">
                <h1>Nice Work!</h1>

                <h3>Please fill out the information below so our Agent<br />
                    Advisor can reach out to you within 24 hours to.</h3>

                <div class="row items">
                    <div class="small-col-padding col-md-3 col-md-offset-1 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
                        <span class="item-circle">1</span> Review your results
                    </div>
                    <div class="small-col-padding col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
                        <span class="item-circle">2</span> Answer any questions
                    </div>
                    <div class="small-col-padding col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
                        <span class="item-circle">3</span> Connect you with a qualified agent
                    </div>
                </div>

                <input type="text" placeholder="Email" class="form-control" v-model="vueRoot.lead.email">
                <input type="text" placeholder="Phone Number" class="form-control last" v-model="vueRoot.lead.phone">
                <div class="mabo3 disclaimer">Your personal information is <a href="">100% safe with us.</a></div>

                <div class="row">
                    <button
                            @click="next()"
                            class="btn-proceed center-block">

                        submit
                    </button>
                </div>
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
            next: function() {
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
        }
    }
</script>
