<template>
    <div>
        <h1> Vehicles </h1>
        <form action="#" @submit.prevent="edit ? updateVehicle(vehicle.id) : store()">
            <div class="form-group">
                <label> Name </label>
                <input v-model="vehicle.name" type="text" name="name" class="form-control" />
            </div>

            <div classs="form-group">
                <button v-show="!edit" type="submit" class="btn btn-primary">New Vehicle</button>
                <button v-show="edit" type="submit" class="btn btn-primary"> Update vehicle </button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
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