<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-200">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Login</h1>
            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label for="email" class="block mb-1">Email</label>
                    <input v-model="form.email" type="email" name="email" id="email" required
                        class="border w-full px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1">Password</label>
                    <input v-model="form.password" type="password" name="password" id="password"
                        class="border w-full px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4 text-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-20 py-2 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Log
                        in</button>
                </div>
            </form>
            <div class="text-center mt-4 border-t border-gray-300 pt-4">
                <p class="mb-2">Don't have an account?</p>
                <a href="/register" class="text-blue-500 hover:underline">Register Here</a>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3';

let form = useForm({
    email: '',
    password: ''
});
let submit = () => {
    form.post('/login');
}
</script>
