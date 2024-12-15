<template>
    <div class="mt-5 w-50 mx-auto">
        <router-link :to="{name:'list.index'}">List of some data</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'Index',
};
</script>

<style scoped>
/* Ваши стили */
</style>
