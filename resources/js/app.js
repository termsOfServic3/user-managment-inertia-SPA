import { createApp, h } from 'vue'
import {createInertiaApp, Link} from '@inertiajs/vue3'
import { InertiaProgress } from "@inertiajs/progress";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .mount(el)
    },
    title: title => title + " - My App"
});

InertiaProgress.init({
    delay: 1,
    color: '#00BFFF',
    includeCSS: true,
    showSpinner: true,
});
