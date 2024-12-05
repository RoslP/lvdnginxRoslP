<script>

import CreateComponent from "@/components/CreateComponent.vue";
import IndexComponent from "@/components/IndexComponent.vue";
export default {
    name: "SomeAxiosComponent",
    components: {IndexComponent, CreateComponent},
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
    <index-component></index-component>
</template>

<style scoped>

</style>
