<script>
export default {
    name: "App"
}
</script>

<template>
  <router-link :to="{name : 'person.index'}"> People </router-link>
    <router-view></router-view>
</template>

<style scoped>

</style>
