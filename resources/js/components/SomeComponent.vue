<script>
export default {
    name: "SomeComponent",
    components: {},
    methods: {},
    mounted() {
        this.$parent.$parent.parentLog2()
    },
    props:[
       'obj'
    ]

}
</script>

<template>
    <div>
        <div>Color: {{obj.color}}</div>
        <div>Number: {{obj.number > 10 ? 'more 10' : 'less 10'}}</div>
        <div>Is published: {{ obj.isPublished ? 'Published' : 'Not a Published'}}</div>
    </div>
</template>

<style scoped>

</style>
