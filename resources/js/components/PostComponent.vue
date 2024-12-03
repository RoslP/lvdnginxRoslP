<script>
import SingePostComponent from "./SingePostComponent.vue";

export default {
  name: "PostComponent",
  components: {
    SingePostComponent
  },
  data() {
    return {
      name: 'Oleg',
      age: '42',
      boolean: false,
      someNull: null
    }
  }
}

</script>

<template>
  <div><p>This is PostComponent </p>
    <SingePostComponent></SingePostComponent>
    name : {{name}}
    age : {{age}}
  </div>
</template>

<style scoped>

</style>
