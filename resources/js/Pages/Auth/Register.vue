<template>
    <div class="flex justify-center items-center min-h-screen bg-gray-200">
        <div class="w-full max-w-md bg-white p-6 rounded-md shadow-md">
            <h1 class="text-2xl font-bold mb-4">Registration</h1>
            <form @submit.prevent="submit" method="POST" action="/register">
                <div class="mb-4">
                    <label for="name" class="block mb-1">Name</label>
                    <input v-model="form.name" type="text" name="name" id="name" required
                        class="border w-full px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-1">Email</label>
                    <input v-model="form.email" type="email" name="email" id="email" required
                        class="border w-full px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    <div v-if="errors.email" class="text-red-500">{{ errors.email }}</div>
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1">Password</label>
                    <input v-model="form.password" type="password" name="password" id="password" required
                        class="border w-full px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    <div v-if="errors.password" class="text-red-500">{{ errors.password }}</div>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-1">Password Confirmation</label>
                    <input v-model="form.password_confirmation" type="password" name="password_confirmation"
                        id="password_confirmation" required
                        class="border w-full px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    <div v-if="errors.password_confirmation" class="text-red-500">{{ errors.password_confirmation }}</div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-12 py-2 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Register</button>
                </div>
            </form>
        </div>
    </div>
</template>


<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';
defineProps({ errors: Object });
let form = reactive({
    'name': '',
    'email': '',
    'password': '',
    'password_confirmation': ''
});
let submit = () => {
    router.post('/register', form);
};
</script>
