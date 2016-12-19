<template>
    <div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 teal_ce">
                <h1>What’s most imporant to you?</h1>

                <button class="btn-step center-block" v-for="button in buttons" @click="setPreferences(button)">{{ button }}</button>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">
                <h2>This question will help us find the perfect neighboorhoods & matching agent for you!</h2>
                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">198</span> <br />
                    Answer more questions to find the best match!
                </p>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data() {
            var buttons = [];
            buttons.push('Good Schools');
            buttons.push('Walkable');
            buttons.push('Lots of Space');
            buttons.push('Close to Nightlife');
            buttons.push('Not Sure');
            buttons = this.shuffle(buttons);
            return {
                vueRoot: this.$parent.$parent.$parent,
                buttons: buttons
            }
        },
        methods: {
            setPreferences: function(button) {
                this.vueRoot.lead.preferences = button;
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
            shuffle: function(array) {
                var currentIndex = array.length, temporaryValue, randomIndex;
                while (0 !== currentIndex) {
                    randomIndex = Math.floor(Math.random() * currentIndex);
                    currentIndex -= 1;
                    temporaryValue = array[currentIndex];
                    array[currentIndex] = array[randomIndex];
                    array[randomIndex] = temporaryValue;
                }
                return array;
            }
        }
    }
</script>
