<script>
export default {
    name: "MessagesIndex",
    props: ['messages'],
    methods: {
        storeMessage() {
            axios.post('/messages',{body: this.body})
                .then(res=>{
                    console.log(res)
                })
        }
    },
    mounted() {
        console.log(this.messages)
    },
    data(){
      return {
          'body':null
      }
    }
}
</script>

<template>
    <div class="w-1/2 mx-auto">
        <div class="pt-8 mb-4">
            <div v-if="messages.length > 0">
                <h3 class="text-lg mb-8">Messages</h3>
                <div v-for="message in messages">
                    <p>{{ message.id }}</p>
                    <p>{{ message.body }}</p>
                    <p>{{ message.created_at }}</p>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <input v-model="body" class="rounded-full border border-gray-400" type="text" placeholder="your message">
        </div>
        <div class="mb-4">
            <button
                @click.prevent="storeMessage"
                class="block rounded-lg w-48 border-2 border-sky-600 bg-sky-600 text-white text-center py-2 hover:bg-sky-200 hover:text-sky-600">
                Send
            </button>
        </div>
    </div>
</template>

<style scoped>

</style>
