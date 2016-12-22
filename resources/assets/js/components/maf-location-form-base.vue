<template>
    <section id="location-form-step" class="container location">
        <div class="row">
            <maf-location-form></maf-location-form>
        </div>

        <div id="agent-support" class="hidden-xs hidden-sm">
            <div class="box-widget-a">
                <p>Looks like you’re in San Diego, search here for a new location. Questions? Let me know!</p>
                <input type="text" name="search-term" placeholder="Type Question Here">
                <button>ask <span class="i arrow-right"></span></button>
                <i class="assistant"></i>
            </div>
        </div>
    </section>
</template>
