<template>
    <div>
        <title>AAAAA</title>
        <app-header></app-header>
        <h1> MyCar </h1>

        <p>Welcome to MyCar! <br>
        <p><b>My Car is a place where you can buy/rent and sell your car!</b></p>
        <p><b>Here you can find any car you want!</b></p>
        <p>If you want to add your car then you should <b>register</b> first and then you are free to go!</p></p>
    
        <app-footer></app-footer>
    </div>
</template>

<script>

    import Navbar from './layouts/Navbar.vue';
    import Footer from './layouts/Footer.vue';

    export default {
        title: {
            'title': 'MyCar || Home'
        },

        components: {
            'app-header': Navbar,
            'app-footer': Footer
        },

        data: function() {
            return {
                edit: false,
                list: [],
                vehicle: {
                    id: '',
                    name: '',
                    type: ''
                }
            }
        },
        mounted: function() {
            console.log('Vehicles comp loaded');
        },
        methods: {
            store: function() {
                
            },
            updateVehicle: function(id) {

            },
        }
    }
</script>