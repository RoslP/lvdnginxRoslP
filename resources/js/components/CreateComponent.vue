<script>
export default {
    name: "CreateComponent",
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    methods: {
        addPerson() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.name = null
                    this.age = null
                    this.job = null
                    console.log(res);
                })
        }
    }
}
</script>

<template>
    <div class="w-25 px-5 pt-5 ">
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
        </div>
        <div class="mb-3">
            <button @click.prevent="addPerson" type="button" id="sendDataButton" class="btn btn-primary">Send data
            </button>
        </div>
    </div>
</template>

<style scoped>

</style>
