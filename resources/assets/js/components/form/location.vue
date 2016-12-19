<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
            <div id="location-form-container" class="box-shadow-white">
                <h1>Find the best real estate agent for your family</h1>
                <h2>We pair you with an agent specializing in your needs</h2>

                <div class="input-group location-selected">
                    <i class="location-icon"></i>
                    <input type="text" class="form-control" v-model="vueRoot.lead.location" id="googlemap-autocomplete-selector">
                    <span class="input-group-btn">
                        <button class="btn btn-find-agent" type="button" @click="nextStep">
                          find <span class="hidden-xs">my agent</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        mounted: function() {
            var self = this;
            var googleMap = this.vueRoot.getGoogleMap();
            if (this.vueRoot.lead.location !== null) {
                this.vueRoot.googleMapRequested = true;
                googleMap.fitBounds(this.vueRoot.lead.viewport);
            } else {
                this.vueRoot.setCallback(function(address, pos) {
                    self.vueRoot.lead.location = address;
                    self.vueRoot.lead.viewport = pos;
                    googleMap.setCenter(pos);
                    self.vueRoot.googleMapRequested = true;
                });
            }
            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('googlemap-autocomplete-selector'));
            autocomplete.bindTo('bounds', googleMap);
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.log("Autocomplete's returned place contains no geometry");
                    return;
                }
                self.vueRoot.googleMapRequested = true;
                self.vueRoot.lead.location = document.getElementById('googlemap-autocomplete-selector').value;
                self.vueRoot.lead.viewport = place.geometry.viewport;
                self.vueRoot.lead.save();
                if (place.geometry.viewport) {
                    googleMap.fitBounds(place.geometry.viewport);
                } else {
                    googleMap.setCenter(place.geometry.location);
                }
            });
            autocomplete.setTypes(['(cities)']);
        },
        methods: {
            nextStep: function(event) {
                //if (!this.vueRoot.getRequestGoogleMap()) return;
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
