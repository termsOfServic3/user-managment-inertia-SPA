<template>
    <Layout>
        <Head title="Create User"></Head>

        <h1 class="text-3xl ml-96 items-center">Create a New User</h1>

        <form  @submit.prevent="submit" class="max-w-md mx-auto mt-8">
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="name"
                >
                    Name
                </label>
                <input v-model="form.name" class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        required
                />
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    email
                </label>
                <input v-model="form.email" class="border border-gray-400 p-2 w-full"
                       type="email"
                       name="email"
                       id="email"
                       required
                >
            </div>


            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Password
                </label>
                <input v-model="form.password"
                       class="border border-gray-400 p-2 w-full"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
            </div>

            <div class="mb-6">
                <button type="submit"
                        :disabled="form.processing"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                   >
                        Submit
                </button>
            </div>
        </form>
    </Layout>

</template>

<script setup>

import Layout from "@/Shared/Layout.vue";
import {Head} from "@inertiajs/inertia-vue3";
import {router, useForm} from "@inertiajs/vue3";
import {ref} from "vue";


let form = useForm({
    name: '',
    email: '',
    password: ''
});

defineProps({ errors: Object })

function submit() {
    form.post('/users', form)
}

</script>
