<template>
    <div class="container">
        <list></list>

    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return {
                name: 'Kaspar',
                lastname: 'Suursalu',
            }
        },
        computed: {
            fullname(){
                return this.name + ' ' + this.lastname;
            }
        },
        methods: {
            changeName(){

            }
        }
    }
</script>
<style>

</style>
