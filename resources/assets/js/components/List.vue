<template>
    <ul>
        <li v-for="(item, id) in data">{{item}} <a href="" @click.prevent="deleteItem(id)">delete</a></li>
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
                data: {},
                input: ''
            }
        },
        computed: {
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
            },
            deleteItem(id){
                var vm = this;
                axios.get('/delete/' + id).then(function (response) {
                    console.log(vm.data[id]);
                    var temp = vm.data;
                    delete temp[id];
                    vm.data = temp;
                    console.log(vm.data[id]);
                })
            }
        }
    }
</script>