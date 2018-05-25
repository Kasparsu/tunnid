<template>
    <div>
        Username: <input type="text" v-model="username">
        <button @click="login">Login</button>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                username: '',
            }
        },
        methods: {
            login(){
                this.$emit('login', this.username);
            }
        }
    }
</script>

<style scoped>

</style>