<template>

    <div class="bg-gradient-to-tr from-pink-50 to-white min-h-screen">



    <section class="p-6 border-b ">
    <header class="flex justify-between">
      <h1 class="text-sm/6 font-semibold text-gray-900">
          My App
      </h1>

        <p class="text-sm/6 font-semibold text-gray-900">
            Welcome Back, {{username}}!
        </p>

        <Nav/>

    </header>
    </section>


    <section class="p-6">
        <slot/>
    </section>
    </div>

</template>


<script>

import {defineComponent} from "vue";
import Nav from "@/Shared/Nav.vue";

export default defineComponent({
    components: {Nav},

    computed: {
        username() {
            return this.$page.props.auth.user.username;
        }
    }

})
</script>
