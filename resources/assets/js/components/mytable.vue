<template>
<div class="mytable">
<button v-on:click="AddRow" class="uk-button uk-button-default uk-width-1-1">Button</button>
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Ip Address</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="Account in Accounts" v-bind:key="Account.id">            
            <td v-text="Account.id"></td>
            <td v-text="Account.first_name"></td>
            <td v-text="Account.last_name"></td>
            <td v-text="Account.email"></td>
            <td v-text="Account.gender"></td>
            <td v-text="Account.ip_address"></td>
         </tr>
    </tbody>
</table>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                Accounts: [],
                Account: {
                    id: '',
                    first: '',
                    last: '',
                    email: '',
                    gender: '',
                    ip: ''
                },
            }
        },
        created() {
            var ref = this;
            this.requestData(ref);
        },
        methods: {

            populate: function(item, index) {
                Accounts[index] = item;
            },

            requestData: function(ref) {
                axios.get('https://api.mockaroo.com/api/b44ca100?count=10&key=b6eab360')
                .then(function (response) {
                    ref.Accounts = response.data;
                    // console.log(JSON.parse(data));
                    // data.foreach(ref.populate); 
                });
            },

            AddRow: function() {
                var ref = this;
                axios.get('https://api.mockaroo.com/api/b44ca100?count=1&key=b6eab360')
                .then(function (response) {
                    ref.Accounts.push(response.data[0]);
                });
            }
        }
    }

</script>

<style>

</style>

