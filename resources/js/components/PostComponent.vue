<script>
import SingePostComponent from "./SingePostComponent.vue";
import AxiosComponent from "./AxiosComponent.vue";

export default {
    name: "PostComponent",
    components: {
        AxiosComponent,
        SingePostComponent
    },
    data() {
        return {
            name: 'Oleg',
            age: '42',
            boolean: false,
            someNull: null,
            persons: [
                {
                    name: 'oleg',
                    age: 20,
                    job: 'not a job 1'
                },
                {
                    name: 'oleg 2',
                    age: 40,
                    job: 'not a job 2'
                },
                {
                    name: 'oleg 3',
                    age: 30,
                    job: 'not a job 3'
                },

            ]
        }
    },
    methods: {
        sayHello() {
            console.log('Hello')
        },
        sayHi() {
            console.log('Hi')
        }
    },
    computed: {
        computedMethod() {
            return 'my name is Oleg'
        },
        personsMore20() {
            return this.persons.filter(function (person) {
                return person.age > 20
            })
        }
    }
}

</script>

<template>
    <div><p>This is PostComponent </p>
        <SingePostComponent></SingePostComponent>
        <axios-component></axios-component>
        name : {{ name }}
        age : {{ age }}
        computed : {{ computedMethod }}
    </div>
    <button type="button" @click="this.sayHello()">Hello</button>
    <button type="button" @click="this.sayHi()">Hi</button>
    <div v-for="person in personsMore20">
        <div>{{ person.name }}</div>
        <div>{{ person.age }}</div>
        <div>{{ person.job }}</div>
    </div>
</template>

<style scoped>

</style>
