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
        },
        updatePeople(id) {
            this.editPersonId = null
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.getPeople()
                })
        },
        editRow(id, name, age, job) {
            this.editPersonId = id
            this.name = name
            this.age = age
            this.job = job
            console.log(this.editPersonId)
        },
        deletePeople(id) {
            if (confirm('Wanna delete ?')) {
                axios.delete(`/api/people/${id}`)
                    .then(res => {
                        this.getPeople()
                        console.log(res)
                    })
            }
        }
    },
    data() {
        return {
            people: null,
            editPersonId: null,
            name: null,
            job: null,
            age: null,
        }
    },
    mounted() {
        this.getPeople()
    },
}
</script>

<template>
    <div class="mb-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="people in people" :key="people.id">
                <template v-if="editPersonId !== people.id">
                    <th scope="row">{{ people.id }}</th>
                    <td>{{ people.name }}</td>
                    <td>{{ people.age }}</td>
                    <td>{{ people.job }}</td>
                    <td>
                        <button @click.prevent="editRow(people.id,people.name,people.age,people.job)"
                                class="btn btn-success">Edit
                        </button>
                    </td>
                    <td>
                        <button @click="deletePeople(people.id)" class="btn btn-danger">Delete</button>
                    </td>
                </template>

                <template v-else>
                    <th scope="row">{{ people.id }}</th>
                    <td><input type="text" class="form-control w-auto" v-model="this.name"/></td>
                    <td><input type="number" class="form-control w-auto" v-model="this.age"/></td>
                    <td><input type="text" class="form-control w-auto" v-model="this.job"/></td>
                    <td>
                        <button @click.prevent="updatePeople(people.id)" class="btn btn-success">Update</button>
                    </td>
                    <td>
                        <button @click="deletePeople(people.id)" class="btn btn-danger">Delete</button>
                    </td>
                </template>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>
table {
    table-layout: fixed; /* Устанавливаем фиксированное распределение столбцов */
    width: 100%;
}
</style>
