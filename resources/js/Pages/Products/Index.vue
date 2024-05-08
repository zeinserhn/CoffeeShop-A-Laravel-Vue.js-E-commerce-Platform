<template>
    <Head>
        <title>Products</title>
    </Head>
    <Layout>

        <div class="flex mt-10 mb-8">
            <h2 class="text-3xl font-bold ml-10">All Products</h2>
            <input type="text" v-model="search" placeholder="Search" class="ml-20 pr-20 border border-gray-300 rounded-md">
        </div>


        <!-- component -->

        <div tabindex="0" class="focus:outline-none">
            <!-- Remove py-8 -->
            <div class="mx-auto container py-8">
                <div class="grid grid-cols-4 grid-gap-4">

                    <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8" v-for="product in products"
                        :key="product.id">
                        <div>
                            <img alt="person capturing an image" :src="product.image" tabindex="0"
                                class="focus:outline-none w-full h-44" />
                        </div>
                        <div class="bg-white">
                            <div class="flex items-center justify-between px-4 pt-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                    </svg>
                                </div>
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">${{ product.price }}
                                    </p>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ product.name }}</h2>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{ product.description
                                }}</p>
                                <button @click="addToCart(product)"
                                    class="bg-yellow-400 px-2 font-bold text-sm rounded-lg border shadow-sm cursor-pointer">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </Layout>
    <footer class="dark:bg-gray-900" id="footer">
    <div class="container px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
            <div class="sm:col-span-2">
                <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Subscribe our newsletter to get update.</h1>

                <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                    <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address">

                    <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        Subscribe
                    </button>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="/" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Home</a>
                    <a href="/products" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Products</a>
                    <a href="/about" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">About</a>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-700">

        <div class="flex items-center justify-between">
            <a href="#">
                <img class="w-10 h-10 mb-3" src="/images/logo.png" alt="">
            </a>

            <div class="flex -mx-2">
                <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
            </div>
        </div>
    </div>
</footer>
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import { defineProps } from 'vue';
import { toRefs, computed } from 'vue'
import { useCartStore } from '../../Store/cart'
import { storeToRefs } from 'pinia';
import { ref, watch } from 'vue';
import debounce from 'lodash/debounce';
import { router } from '@inertiajs/vue3';
let props = defineProps({
    products: Object,
    filters: Object,

});
const { products } = toRefs(props)
const cartStore = useCartStore()
const { cart } = storeToRefs(cartStore)

const addToCart = (product) => {
    cart.value.push(product)
}

const isAlreadyInCart = computed(() => {
    let res = cart.value.find(c => c.id === products.value.id)
    if (res) return true
    return false
})
let search = ref(props.filters.search);
watch(search, debounce(function (value) {
    console.log('triggered');
    router.get('/products', { search: value }, {
        preserveState: true,
        replace: true
    });
}, 500));

</script>
<style scoped>
#footer{
    background-color: #d3ad7f;
}
</style>

