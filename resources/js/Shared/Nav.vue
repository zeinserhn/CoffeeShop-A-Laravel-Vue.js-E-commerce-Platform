<template>
    <nav class="flex items-center justify-between px-10 py-4">
      <!-- Navigation Links -->
      <div class=" flex items-center">
        <NavLink href="/" :active="$page.component=='Home'" class="nav-link">Home</NavLink>
        <NavLink href="/users" :active="$page.component=='Users'" class="nav-link">Users</NavLink>
        <NavLink href="/settings" :active="$page.component=='Settings'" class="nav-link">Settings</NavLink>
        <NavLink href="/cart" class="relative">
          <span class="absolute top-0 right-[10px] w-[14px] h-[14px] rounded-full bg-gray-900 text-orange-400 flex items-center justify-center font-extrabold text-xs">
            {{ cartStore.cart.length }}
          </span>
          <CartMinusIcon fillColor="#FCFCFC" :size="40" class="-mt-0.5" />
        </NavLink>
        <div class="bg-black pr-90"></div>
        <div>
          <template v-if="!user">
            <NavLink href="/login" :active="$page.component=='Login'" class="nav-link">Login</NavLink>
            <NavLink href="/register" :active="$page.component=='Register'" class="nav-link">Register</NavLink>
          </template>
          <template v-else>
            <NavLink href="/logout" method="post" class="nav-link">Log Out</NavLink>
            <NavLink href="/account" :active="$page.component=='Index'" class="nav-link">{{ user.name }}</NavLink>
          </template>
        </div>
      </div>
    </nav>
  </template>

  <script setup>
  import CartMinusIcon from 'vue-material-design-icons/CartMinus.vue';
  import NavLink from './NavLink.vue';
  import { computed } from 'vue';
  import { usePage } from '@inertiajs/vue3';
  import { useCartStore } from '../Store/cart';
  const components = {
    NavLink
  };


      const cartStore = useCartStore()
      const page = usePage();
      const user = computed(() => page.props.auth.user);

      // You can return the user or use it within the component as needed





  </script>
