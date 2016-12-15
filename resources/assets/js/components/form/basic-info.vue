<template>
    <div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 teal_ce">
                <h1>Now a little bit about you...</h1>
                <h3>What is your name? We never share your personal information with third parties.</h3>

                <input type="text" placeholder="Full Name" class="form-control mabo1" v-model="vueRoot.lead.fullname">
                <div class="disclaimer mabo3">Your personal information is <a href="">100% safe with us.</a></div>

                <div class="row">
                    <button
                            @click="next()"
                            class="btn-proceed center-block">

                        next
                    </button>
                </div>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">
                <h2>We value your privacy and will never share your information with 3rd partys.</h2>
                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">14</span> <br />
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
            next: function() {
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
        }
    }
</script>
