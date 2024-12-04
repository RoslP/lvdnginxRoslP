<script>

export default {
    name: "SomeAxiosComponent",
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
<div v-for="data in someData">
    <div>{{data['data 1']}}</div>
    <div>{{data['data 2']}}</div>
    <div>{{data['data 3']}}</div>
</div>
</template>

<style scoped>

</style>
