<script>
import API from '../../api.js'

export default {
    name: "Index",
    data() {
        return {
            cars: null
        }
    },
    methods: {
        getCars() {
            API.get('/api/auth/cars')
                .then(res => {
                    this.cars = res.data
                })
        }
    },
    mounted() {
        this.getCars()
    }
}
</script>

<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Car</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-if="typeof this.cars==='object' || Array.isArray(this.cars)" v-for="car in this.cars">
                <th scope="row">{{ car.id }}</th>
                <td>{{ car.model }}</td>
                <td>{{ car.price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
