<script>
import axios from "axios";

export default {
  name: "Index",

  data() {
    return {
      peoples: null,
    }
  },

  methods: {
    getPeoples() {
      axios.get('/api/people/')
          .then(res => {
            this.peoples = res.data.data
          })
    },
    deletePeople(id)
    {
      axios.delete(`/api/people/${id}`)
          .then(this.getPeoples)
    }
  },

  mounted() {
    this.getPeoples()
  }
}
</script>

<template>
  <div>
    <table class="table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Job</th>
        <th scope="col">Edit</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="people in this.peoples">
        <th scope="row"><router-link :to="{name:'person.show',params:{id:people.id}}">{{ people.id }}</router-link></th>
        <td>{{ people.name }}</td>
        <td>{{ people.age }}</td>
        <td>{{ people.job }}</td>
        <td><router-link class="btn btn-warning" :to="{name: 'person.edit', params:{id:people.id}}">Edit</router-link></td>
        <td> <a @click.prevent="deletePeople(people.id)" href="#" class="btn btn-outline-danger">Delete</a></td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>

</style>
