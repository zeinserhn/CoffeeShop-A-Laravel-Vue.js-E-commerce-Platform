<template>
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

