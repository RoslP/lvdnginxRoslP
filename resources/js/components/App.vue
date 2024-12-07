<script>
export default {
  name: "App"
}
</script>

<template>
  <div class="mx-3 mt-3">
    <router-link :to="{name : 'person.index'}" class="mx-3"> People</router-link>
    <router-link :to="{name: 'person.create'} " class="mx-3"> Create people</router-link>
    <router-view class="mx-3"></router-view>
  </div>
</template>

<style scoped>

</style>
