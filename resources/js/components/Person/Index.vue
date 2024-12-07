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
            this.peoples = res.data
          })
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
        <th scope="row">{{ people.id }}</th>
        <td>{{ people.name }}</td>
        <td>{{ people.age }}</td>
        <td>{{ people.job }}</td>
        <td><router-link class="btn btn-warning" :to="{name: 'person.edit', params:{id:people.id}}">Edit</router-link></td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>

</style>
