<template>
    <div>
        <input type="text" v-model="message" v-on:keydown.enter="sendMessage">
        <button @click="sendMessage">send</button>
    </div>

</template>

<script>
    export default {
        props:['user'],
        mounted() {

        },
        data() {
            return {
                message: "",
            }
        },
        computed: {

        },
        methods: {
            sendMessage(){
                console.log(this.message);
                var messageObject = {
                    message: this.message,
                    user: this.user
                };
                this.$emit('sentMessage', messageObject);
                this.message = "";
            }
        }
    }
</script>
<style>

</style>
