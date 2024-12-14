<script>
import axios from "axios";

export default {
    name: "Show",
    props: ['user'],
    data() {
        return {
            ms_str: ''
        }
    },
    created() {
        window.Echo.channel(`dynamicChannel.${this.$page.props.user.id}`)
            .listen('.dynamic_event', res => {
                this.ms_str = res.broadcast_data
            })
    },
    methods: {
        sendMessage() {
            axios.post(`/user/${this.user.id}`, {from_id: this.$page.props.user.id})
                .then(res => {
                    console.log(res.data)
                })
        }
    }
}

</script>

<template>
    <div>
        <div class="p-16 w-1/3 mx-auto">
            <div class="border-t-2 flex justify-center">
            </div>
            {{ user.name }}
            <div class="mt-8">
                <button
                    @click.prevent="sendMessage"
                    class="block rounded-lg w-48 border-2 border-sky-600 bg-sky-600 text-white text-center py-2 hover:bg-sky-200 hover:text-sky-600">
                    Send
                </button>
            </div>
            <div v-if="ms_str">
                {{ ms_str }}
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
