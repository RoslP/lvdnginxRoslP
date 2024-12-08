<script>
import axios from "axios";
import router from "../../router.js";

export default {
  name: "Edit",
  data() {
    return {
      name: null,
      age: null,
      job: null,
      id: null,
    }
  },
  methods: {
    getPerson() {
      axios.get(`/api/people/${this.$route.params.id}`)
          .then(res => {
            this.name = res.data.data.name
            this.age = res.data.data.age
            this.job = res.data.data.job
            this.id = res.data.data.id
          })
    },
    update() {
      axios.patch(`/api/people/${this.id}`, {name: this.name, age: this.age, job: this.job})
          .then(() => router.push({name: 'person.show', params: {id: this.id}}))
    }
  },
  mounted() {
    this.getPerson()
  },
}
</script>

<template>
  <div class="justify-content-center d-flex">
    <div class="w-25">
      <input type="text" v-model="name" placeholder="name" class="form-control mb-2 mt-2">
      <input type="number" v-model="age" placeholder="age" class="form-control mb-2">
      <input type="text" v-model="job" placeholder="job" class="form-control mb-2">
      <input @click.prevent="update()" type="submit" value="Update" class="btn btn-primary mb-2">
    </div>
  </div>
</template>

<style scoped>

</style>
