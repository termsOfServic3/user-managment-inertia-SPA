<template>
    <Layout>
        <Head>
            <title>Login</title>
        </Head>
        <h1 class=" text-center justify-center text-3xl text-sm/6 font-semibold text-gray-900">Login</h1>

        <form  @submit.prevent="submit" class="max-w-md mx-auto mt-8  p-4 bg-white border rounded-lg bg-gradient-to-tr from-pink-50">
            <div class="mb-6 text-sm/6 font-semibold text-gray-900">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    email
                </label>
                <input v-model="form.email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                       type="email"
                       name="email"
                       id="email"
                       required
                >
            </div>


            <div class="mb-6 text-sm/6 font-semibold text-gray-900">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Password
                </label>
                <input v-model="form.password"
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
            </div>

            <div class="mb-6 flex justify-center ">
                <button type="submit"
                        :disabled="form.processing"
                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                >
                   Log In
                </button>
            </div>
        </form>
    </Layout>

</template>




<script setup>
import Layout from "@/Shared/Layout.vue";
import {Head} from "@inertiajs/inertia-vue3";
import {useForm} from "@inertiajs/vue3";

let form = useForm({
    email: '',
    password: '',
});

defineProps({errors: Object})

function submit() {
    form.post('/login')
}
</script>
