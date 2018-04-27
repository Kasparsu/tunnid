<template>
    <ul>
        <li v-for="item in orderedList">{{item}}</li>
        <input v-model="input" type="text"/>
        <button @click="addItem">add item</button>
    </ul>
</template>

<script>
    export default {
        mounted() {
            var vm = this;
            axios.get('/list')
                .then(function (response) {
                    vm.data = response.data;
                })

        },
        data() {
            return {
                data: [],
                input: ''
            }
        },
        computed: {
            orderedList(){
                return this.data.sort();
            }
        },
        methods: {
            addItem(){
                var vm = this;
                axios.get('/add', {
                    params: {
                        element: vm.input,
                        type: 'shopping'
                    }
                }).then(function (response) {

                    vm.data.push(vm.input);
                    vm.input = '';

                })
            }
        }
    }
</script>