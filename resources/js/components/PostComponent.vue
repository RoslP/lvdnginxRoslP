<script>

import CreateComponent from "./CreateComponent.vue";
import IndexComponent from "./IndexComponent.vue";

export default {
    name: "PostComponent",
    components: {IndexComponent, CreateComponent},
    data() {
        return {
            someData: null
        }
    },
    methods: {
        parentLog() {
            console.log('this is parent component')
        },
        parentLog2() {
            console.log('this is parent component1231232')
        },
    },
    mounted() {
        this.$refs.index.getIndexLog()
    }
}
</script>

<template>
    <create-component></create-component>
    <index-component ref="index"></index-component>
</template>

<style scoped>

</style>
