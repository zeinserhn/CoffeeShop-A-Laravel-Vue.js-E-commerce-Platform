<template>
    <main>
        <div class="color">
            <header class="ml-10 flex items-center p-2">
                <Link class="w-10 h-10 mb-3" href="/"><img src="/images/logo.png"></Link>
                <Link class="font-bold ml-9 text-black-500 hover:underline" href="/">Home</Link>
                <Link class="font-bold ml-6 text-black-500 hover:underline" href="/products">Products</Link>
                <Link class="font-bold ml-6 text-black-500 hover:underline" href="/journal">Journal</Link>
                <Link class="font-bold ml-6 text-black-500 hover:underline" href="/about">About</Link>
                <div class="ml-20">
                    <input type="text" v-model="search" placeholder="Search..."
                        class="bolder pr-80 border border-gray-300 rounded-md">
                </div>
                
                <div class="ml-20">
                    <Link href="/cart" class="relative">
                    <span
                        class="absolute top-0 right-[10px] w-[14px] h-[14px] rounded-full bg-gray-900 text-orange-400 flex items-center justify-center font-extrabold text-xs">{{
                            cartStore.cart.length }}</span>
                    <CartMinusIcon fillColor="#FCFCFC" :size="40" class="-mt-0.5" />
                    </Link>
                </div>
                <div class="flex ml-15">
                    <template v-if="!user">
                        <div class="font-bold ml-6 text-black-500 hover:underline">
                            <Link href="/login" :active="$page.component == 'Login'" class="nav-link">Login</Link>
                        </div>
                        <div class="font-bold ml-6 text-black-500 hover:underline">
                            <Link href="/register" :active="$page.component == 'Register'" class="nav-link">Register</Link>
                        </div>
                    </template>
                    <template v-else>
                        <div class="font-bold ml-6 text-black-500 hover:underline">
                            <Link href="/logout" method="post" class="nav-link">Log Out</Link>
                        </div>
                        <div class="font-bold ml-6 text-black-500 hover:underline">
                            <Link href="/profile" :active="$page.component == 'Index'" class="nav-link">{{ user.name }}</Link>
                        </div>
                    </template>
                </div>
            </header>
        </div>
        <article>
            <slot />
        </article>
    </main>
</template>
<script setup>
import CartMinusIcon from 'vue-material-design-icons/CartMinus.vue';
import MapMarkerOutlineIcon from 'vue-material-design-icons/MapMarkerOutline.vue';
import { Link } from '@inertiajs/vue3';
import { computed, toRefs } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { useCartStore } from '../Store/cart';
const cartStore = useCartStore()
const page = usePage();
const user = computed(() => page.props.auth.user);



</script>
<style scoped>.color {
    background-color: #d3ad7f;
}</style>
