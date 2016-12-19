<template>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 teal_ce">
            <h1>Searching for Agents…</h1>

            <i class="center-block search-animation"></i>

            <h3>
                Please keep your phone handy for when our Agent Advisor reaches out to you at {{getPhone()}} or emails you at {{getEmail()}}.
            </h3>

            <div class="disclaimer">Is this information incorrect?  <a class="small" href="/find-agent/location">Edit</a></div>
        </div>
    </div>
</template>
<script>
    export default{
        methods: {
            getPhone: function() {
                return this.vueRoot.lead.phone;
            },
            getEmail: function() {
                return this.vueRoot.lead.email;
            }
        },
        data() {
            return {
                vueRoot: this.$parent.$parent.$parent
            }
        }
    }
</script>
