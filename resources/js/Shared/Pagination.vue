<template>
    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 font-semibold text-bold text-md border-r border-l rounded-1xl divide-x border-b">
        <Component
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="px-1"
            :class="{ 'text-gray-500': ! link.url, 'font-bold' : link.active }"
        />
    </div>
</template>
<script>
export default {
    props: {
        links: Array
    }
};
</script>
