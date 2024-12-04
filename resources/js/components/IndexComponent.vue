<script>
import axios from "axios";

export default {
    name: "IndexComponent",
    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(data => {
                    this.people = data.data
                })
        }
    },
    data() {
        return {
            people: null
        }
    },
    mounted() {
        this.getPeople()
    }
}
</script>

<template>
    <div class="mb-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">age</th>
                <th scope="col">job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="people in this.people">
                <th scope="row">{{people.id}}</th>
                <td>{{people.name}}</td>
                <td>{{people.age}}</td>
                <td>{{people.job}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
