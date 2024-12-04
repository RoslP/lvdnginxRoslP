<script>
export default {
  name: "AxiosComponent",
  data() {
    return {
      someData: null
    }
  },
  methods: {
    testAxiosWork() {
      axios.get('/axios/test')
          .then(data => {
            this.someData = data.data
          })
    }
  },
  mounted() {
    this.testAxiosWork()
  }
}
</script>

<template>

</template>

<style scoped>

</style>
