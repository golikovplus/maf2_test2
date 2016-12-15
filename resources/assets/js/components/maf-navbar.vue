<template>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="maf-logo navbar-brand" href="/" @click="goHome()"></a>
            </div>

            <div class="navbar-right">
                <div class='contact iveal'>
                    <span class="i phone16"></span>
                    <a href="tel:+18559083506">
                        (855) 908-3506
                    </a>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
    export default {
        methods: {
            goHome: function() {
                localStorage.clear();
            }
        },
    }
</script>
