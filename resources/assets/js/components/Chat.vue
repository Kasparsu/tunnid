<template>
    <div class="container-fluid">
         <h2>chatroom</h2>
        <chat-log :messages="messages"></chat-log>
        <chat-composer :user="username" @sentMessage="addMessage"></chat-composer>
    </div>

</template>

<script>
    export default {
        props:['username'],
        mounted() {
            var vm = this;
            axios.get('/messages').then(function (response) {
                vm.messages = response.data;

            })
        },
         data() {
            return {
                messages: [
                    {
                        user: "user1",
                        message: "message1"
                    },
                    {
                        user: "user2",
                        message: "message2"
                    }
                ],
            }
        },
        computed: {

        },
        methods: {
            addMessage(data){
                this.messages.push(data);
                var vm = this;
                axios.post('/message/add', data).then(function (response) {
                    // vm.messages = response.data;
                })
            }
        }
    }
</script>
<style>

</style>
