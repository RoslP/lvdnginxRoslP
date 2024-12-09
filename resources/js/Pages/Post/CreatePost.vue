<script>
import {reactive} from 'vue'
import {router} from '@inertiajs/vue3'
import {Link} from "@inertiajs/vue3";

export default {
    name: "CreatePost",
    components: {
        Link
    },
    setup() {
        const form = reactive({
            title: null,
            post_content: null,
        })

        function submit() {
            router.post('/post/create', form)
        }

        return {form, submit}
    }
}

</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <div class="mb-8">
            <Link :href="route('post.index')" class="text-sky-500 text-sm">Back</Link>
        </div>
        <div>
            <form @submit.prevent="submit">
                <div class="mb-2">
                    <input placeholder="title" class="w-full rounded-full border-gray-300" v-model="form.title">
                </div>
                <div>
                    <textarea placeholder="post" class="w-full rounded-full border-gray-300"
                              v-model="form.post_content"></textarea>
                </div>
                <div>
                    <button type="submit"
                            class="ml-auto block w-1/4 p-2 text-center text-white bg-teal-600 border-2 border-teal-600 rounded-full hover:bg-white hover:text-teal-600">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
