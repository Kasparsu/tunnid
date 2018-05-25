<template>
    <li>
        <p>{{message.message}}</p>
        <small>{{message.user}}</small>
    </li>

</template>

<script>
    export default {
        props: ['message'],
        mounted() {

        },
        data() {
            return {

            }
        },
        computed: {

        },
        methods: {

        }
    }
</script>
<style>

</style>
