<template>
    <Layout>
        <Head>
            <title>Show User</title>
        </Head>

        <div class="text-black text-lg text-bold rounded-2xl bg-amber-400">
            <ul>
                <li class="space-y-5 flex flex-col">
                    <strong>{{user.name}}</strong>
                    <strong>{{user.email}}</strong>
                    <strong> {{user.created_at}} </strong>
                </li>
            </ul>
        </div>
    </Layout>
</template>


<script setup>
import Layout from "@/Shared/Layout.vue";
import {Head} from "@inertiajs/inertia-vue3";



let props = defineProps({
    user: Object
})




</script>
