<script>

import CreateComponent from "@/components/CreateComponent.vue";

export default {
    name: "SomeAxiosComponent",
    components: {CreateComponent},
    data() {
        return {
            someData: null
        }
    },
    methods: {
    },
    mounted() {
    }
}

</script>

<template>
    <create-component></create-component>
</template>

<style scoped>

</style>
