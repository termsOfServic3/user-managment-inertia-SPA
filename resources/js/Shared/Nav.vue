<template>
        <nav>
            <ul class="flex list-disc space-x-6 list-inside">
                <li class="text-sm/6 font-semibold text-gray-900">
               <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
                </li>

                <li class="text-sm/6 font-semibold text-gray-900">
                <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
                </li>

                <li class="text-sm/6 font-semibold text-gray-900">
                <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
                </li>
                <li class="text-sm/6 font-semibold text-gray-900">
                    <NavLink href="/logout" method="post" as="button" :active="$page.component === 'Logout'">Log Out</NavLink>
                </li>
            </ul>
        </nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import NavLink from "@/Shared/NavLink.vue";

export default {
    components: {
        NavLink,
        Link
    },
};
</script>
