<template>
    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
        <div id="location-form-container" class="box-shadow-white">
            <h1>Find the best real estate agent for your family</h1>
            <h2>We pair you with an agent specializing in your needs</h2>

            <div class="input-group location-selected">
                <i class="location-icon"></i>
                <input type="text" class="form-control" value="" placeholder="placeholder" id="googlemap-autocomplete-selector">
                <span class="input-group-btn">
                    <button class="btn btn-find-agent" type="button">
                      find <span class="hidden-xs">my agent</span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</template>
<script>
    import LocationFormIndexComponent from './location-form/index.vue'
    export default{
        data(){
            return{
                msg:'hello vue'
            }
        },
        components:{
            'other-component':LocationFormIndexComponent,
        }
    }
</script>
