<script>
export default {
    name: "Show",
    data() {
        return {
            person: null
        }
    },
    mounted() {
        axios.get(`/api/people/${this.$route.params.id}`)
            .then(res => this.person = res.data.data)
    }
}
</script>

<template>
    <div v-if="person">
        <div>{{ this.person.id }}</div>
        <div>{{ this.person.name }}</div>
        <div>{{ this.person.age }}</div>
        <div>{{ this.person.job }}</div>
        <router-link class="btn btn-warning" :to="{name: 'person.edit', params:{id:this.person.id}}">Edit</router-link>
    </div>
</template>

<style scoped>

</style>
