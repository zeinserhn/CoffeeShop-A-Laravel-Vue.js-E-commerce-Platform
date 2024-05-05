<template>
    <Head>
      <title>Products</title>
    </Head>
    <Layout>
      <div class="flex justify-center mt-4">
        <div class="w-full md:w-3/4 lg:w-1/2 bg-white p-6 rounded-lg shadow-md">
          <h2 class="text-3xl font-semibold mb-6">Shopping Cart</h2>

          <div v-if="!cart.length" class="text-center text-xl font-bold py-20">
            Your Amazon Cart is empty
          </div>

          <div v-else>
            <div v-for="product in cart" :key="product.id" class="flex border-b mb-6 pb-6">
              <img :src="product.image" alt="Product" class="h-32 w-32 object-cover rounded" />
              <div class="flex-grow ml-4">
                <h3 class="text-xl font-semibold mb-2">{{ product.title }}</h3>
                <p class="text-gray-700">{{ product.description.substring(0, 180) }}...</p>
                <p class="text-teal-600 mt-2">In Stock</p>
                <div class="flex items-center mt-4">
                  <button @click="removeFromCart(product.id)" class="text-sm text-red-500 font-semibold hover:underline cursor-pointer">
                    Delete
                  </button>
                  <span class="ml-auto font-bold">${{ product.price }}</span>
                </div>
              </div>
            </div>

            <div class="font-bold text-xl text-right pt-4">
              Subtotal (Items: {{ cart.length }}): ${{ total }}
            </div>
          </div>
        </div>
      </div>
    </Layout>
  </template>


<script setup>
import Layout from '../Shared/Layout.vue';
import { useCartStore } from '../Store/cart'
import { storeToRefs } from 'pinia';
import { toRefs, computed } from 'vue'
const cartStore = useCartStore()
const { cart } = storeToRefs(cartStore)

const removeFromCart = (id) => {
    cartStore.removeProductFromCart(id)
}
const total = computed(() => {
    let total = 0
    cart.value.forEach(c => {
        total += c.price
    })
    if (total > 0) {
        return total.toFixed(2)
    }
    return 0
})
</script>
