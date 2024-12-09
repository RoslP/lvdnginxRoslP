<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "IndexComponent",
    components:{
        Link
    },
    props:['posts'],
}
</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Posts</h1>
        <Link :href="route('post.create')" class="block w-1/4 p-2 text-center text-white bg-teal-600 border-2 border-teal-600 rounded-full hover:bg-white hover:text-teal-600">
            Create
        </Link>
        <div v-if="posts">
            <div v-for="post in posts.data" class="mt-8 pt-4 border-t border-gray-300">
                <div>post title: {{ post.title }}</div>
                <div>post content: {{ post.post_content }}</div>
                <div>post created at: {{ post.date_create }}</div>
                <div>post updated at: {{ post.date_update }}</div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
