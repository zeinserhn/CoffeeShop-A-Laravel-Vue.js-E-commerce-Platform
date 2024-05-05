<template>
    <div class="max-w-2xl mx-auto py-8">
      <h1 class="text-3xl font-bold mb-6">Edit Profile</h1>
      <form @submit.prevent="updateProfile" class="mb-8">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
          <input type="text" v-model="form.name" id="name" name="name" placeholder="Name" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="email" v-model="form.email" id="email" name="email" placeholder="Email" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>
        <!-- Add other fields you want to edit -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update Profile</button>
      </form>

      <h1 class="text-3xl font-bold mb-6">Change Password</h1>
      <form @submit.prevent="updatePassword" class="mb-8">
        <div class="mb-4">
          <label for="current_password" class="block text-gray-700 font-bold mb-2">Current Password</label>
          <input type="password" v-model="password.current_password" id="current_password" name="current_password" placeholder="Current Password" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
          <label for="new_password" class="block text-gray-700 font-bold mb-2">New Password</label>
          <input type="password" v-model="password.password" id="new_password" name="new_password" placeholder="New Password" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
          <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm New Password</label>
          <input type="password" v-model="password.password_confirmation" id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password" class="border border-gray-300 rounded px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update Password</button>
      </form>

      <h1 class="text-3xl font-bold mb-6">Delete Account</h1>
      <form @submit.prevent="deleteAccount">
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete Account</button>
      </form>
    </div>
  </template>

  <script>
  export default {
    props: {
      user: Object,
    },
    data() {
      return {
        form: {
          name: this.user.name || '',
          email: this.user.email || '',
        },
        password: {
          current_password: '',
          password: '',
          password_confirmation: '',
        },
      };
    },
    methods: {
      updateProfile() {
        this.$inertia.post('/profile/edit', this.form);
      },
      updatePassword() {
        this.$inertia.post('/profile/updatePassword', this.password);
      },
      deleteAccount() {
        if (confirm('Are you sure you want to delete your account?')) {
          this.$inertia.post('/profile/delete');
        }
      },
    },
  };
  </script>
