<script>
import axios from "axios";

export default {
    name: "Login",
    data() {
        return {
            email: null,
            password: null,
        }
    },
    methods: {
        login() {
            axios.post('/api/auth/login', {email: this.email, password: this.password})
                .then(res => {
                    localStorage.setItem('access_token', JSON.stringify(res.data.access_token))
                    this.$router.push({name:'users.personal'})
                })
        }
    }
}
</script>

<template>
    <div class="w-25 mt-5 mx-auto">
        <input v-model="email" type="email" class="form-control mb-3" placeholder="email">
        <input v-model="password" type="password" class="form-control mb-3" placeholder="password">
        <input @click.prevent="login" type="submit" class="btn btn-primary mb-3">
    </div>
</template>

<style scoped>

</style>
