<template>
    <section id="home-type-form-step" class="container home-type extra-padding">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 teal_ce">

                <h1 v-show=" get_is_buyer()">What kind of home are you looking for?</h1>
                <h1 v-show="!get_is_buyer()">What kind of home are you selling?</h1>

                <div class="container-fluid mawi90 option-boxes">
                    <div class="row">
                        <div class="small-col-padding col-md-4 col-ms-4 col-xs-4">
                            <div class="box-option center-block">
                                <i class="i24 singlefamily-icon"></i><br />
                                Single Family Home
                                <label @click="setHomeType('Single Family')" title="Single Family" for="single-family-input">
                                    <input type="radio" name="homeType" id="single-family-input" value="Single Family" /> <img />
                                </label>
                            </div>
                        </div>
                        <div class="small-col-padding col-md-4 col-ms-4 col-xs-4">
                            <div class="box-option center-block">
                                <i class="i24 condominium-icon"></i><br />
                                Condominium
                                <label @click="setHomeType('Condominium')" title="Condominium" for="condominium-input">
                                    <input type="radio" name="homeType" id="condominium-input" value="Condominium" /> <img />
                                </label>
                            </div>
                        </div>
                        <div class="small-col-padding col-md-4 col-ms-4 col-xs-4">
                            <div class="box-option center-block">
                                <i class="i24 tic-icon"></i><br />
                                Townhome
                                <label @click="setHomeType('Town Home')" title="Townhome" for="tic-input">
                                    <input type="radio" name="homeType" id="tic-input" value="Town Home" /> <img />
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-col-padding col-md-4 col-ms-4 col-xs-4">
                            <div class="box-option center-block">
                                <i style="width:28px" class="i24 mobilehome-icon"></i><br />
                                Mobile Home
                                <label @click="setHomeType('Mobile Home')" title="Mobile Home" for="mobilehome-input">
                                    <input type="radio" name="homeType" id="mobilehome-input" value="Mobile Home" /> <img />
                                </label>
                            </div>
                        </div>
                        <div class="small-col-padding col-md-4 col-ms-4 col-xs-4">
                            <div class="box-option center-block">
                                <i class="i24 empty-lot-icon"></i><br />
                                Empty Lot
                                <label @click="setHomeType('Land/Lot')" title="Empty Lot" for="empty-lot-input">
                                    <input type="radio" name="homeType" id="empty-lot-input" value="Land/Lot" /> <img />
                                </label>
                            </div>
                        </div>
                        <div class="small-col-padding col-md-4 col-ms-4 col-xs-4">
                            <div class="box-option center-block">
                                <i class="i24 commercial-icon"></i><br />
                                Commercial Space
                                <label @click="setHomeType('Rental')" title="Commercial Space" for="commercial-input">
                                    <input type="radio" name="homeType" id="commercial-input" value="Rental" /> <img />
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <button
                                @click="next($event)"
                                class="btn-proceed center-block">

                            next
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="agent-hint" class="hidden-xs hidden-sm">
            <div class="box-widget-a box-widget-padding">

                <h2>Different types call for different agents, we will find the one that your unique needs.</h2>

                <p class="teal_ce">
                    Your matches so far: <br />
                    <span class="quantity">240</span> <br />
                    Answer more questions to find the best match!
                </p>
            </div>
        </div>
    </section>
</template>
<script>
    export default{
        data() {
            return {
                vueRoot: this.$parent.$parent.$parent
            }
        },
        methods: {
            setHomeType: function(type) {
                this.vueRoot.lead.home_type = type;
            },
            get_is_buyer: function() {
                return this.vueRoot.lead.lead_type;
            },
            next: function() {
                var vueFormBase = this.$parent;
                vueFormBase.nextStep();
            },
        }
    }
</script>
