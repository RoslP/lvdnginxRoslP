<template>
    <div class="mt-5 w-50 mx-auto">
        <router-link class="pe-2" :to="{name:'list.index'}">List of some data</router-link>
        <router-link class="pe-2" :to="{name:'users.login'}">Login</router-link>
        <router-link class="pe-2" :to="{name:'users.registration'}">Registration</router-link>
        <router-link class="pe-2" :to="{name:'users.personal'}">Personal</router-link>
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
