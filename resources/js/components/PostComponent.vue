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
  },
  methods: {
    sayHello() {
      console.log('Hello')
    },
    sayHi() {
      console.log('Hi')
    }
  },
  computed: {
    computedMethod() {
      return 'my name is Oleg'
    }
  }
}

</script>

<template>
  <div><p>This is PostComponent </p>
    <SingePostComponent></SingePostComponent>
    name : {{ name }}
    age : {{ age }}
    computed : {{computedMethod}}
  </div>
  <button type="button" @click="this.sayHello()">Hello</button>
  <button type="button" @click="this.sayHi()">Hi</button>
</template>

<style scoped>

</style>
