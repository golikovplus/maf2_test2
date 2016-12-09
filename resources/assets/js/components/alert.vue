<style>
    .alert {
        padding: 2em;
    }
    .alert-Success {
        border: 10px solid green;
    }
    .alert-Error {
        border: 10px solid red;
    }
</style>

<template>
    <div class="alert"
         v-bind:class="{
            'alert-Success': type == 'success',
            'alert-Error': type == 'error',
        }"
         v-show="show">
        <p>
            {{ msg }}
        </p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show: true
            }
        },
        props: ['msg', 'type'],
                ready() {
        }
    }
</script>