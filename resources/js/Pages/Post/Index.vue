<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "IndexComponent",
    components:{
        Link
    }
}
</script>

<template>
    <div class="w-96 mx-auto">
        <h1 class="text-lg mb-8">Posts</h1>
        <Link class="block w-1/4 p-2 text-center text-white bg-teal-600 border-2 border-teal-600 rounded-full hover:bg-white hover:text-teal-600">
            Add post
        </Link>
    </div>
</template>

<style scoped>

</style>
