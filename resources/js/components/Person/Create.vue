<script>
import axios from "axios";
import router from "../../router.js";

export default {
  name: "Create",
  data() {
    return {
      name: null,
      age: null,
      job: null,
    }
  },
  methods: {
    store() {
      axios.post('/api/people/', {name: this.name, age: this.age, job: this.job})
          .then(() => router.push({name: 'person.index'}))
    }
  }
}
</script>

<template>
  <div class="d-flex justify-content-center">
    <div class="w-25">
      <input type="text" v-model="name" placeholder="name" class="form-control mb-2 mt-2">
      <input type="number" v-model="age" placeholder="age" class="form-control mb-2">
      <input type="text" v-model="job" placeholder="job" class="form-control mb-2">
      <input @click.prevent="store" type="submit" value="Add" class="btn btn-primary mb-2">
    </div>
  </div>
</template>

<style scoped>

</style>
