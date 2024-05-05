import { createApp, h } from 'vue';
import { createInertiaApp,Link,Head} from '@inertiajs/vue3';
import { createPinia } from 'pinia'
import piniaPluginPersistedstate from 'pinia-plugin-persistedstate'

const pinia = createPinia()
pinia.use(piniaPluginPersistedstate)

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(pinia)
      .use(plugin)
      .component("Link",Link)
      .component("Head",Head)
      .mount(el)
  },
  title:title=>'My App - '+title
});
