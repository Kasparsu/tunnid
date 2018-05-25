<template>
        <ul class="striped-list">
            <message v-for="message in messages" :message="message"></message>
        </ul>
</template>

<script>
    export default {
        props:['messages'],
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
    ul.striped-list > li:nth-of-type(odd) {
        background-color: #e9e9f9 ;
    }
    ul.striped-list > li {
        border-bottom: 1px solid rgb(221,221,221);
        padding: 6px;
    }
    ul.striped-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
</style>
