<template>
    <Head title="Address" />

    <Layout>
        <div class="mt-8"></div>

        <div class="w-[500px] mx-auto text-2xl font-extrabold">
            <div>Add a new address</div>

            <form @submit.prevent="submit">
                <div class="text-[15px] -mb-1.5 font-extrabold">Country</div>
                <select
                    v-model="form.country"
                    class="
                        w-full
                        border-gray-300
                        rounded-lg
                        shadow-md
                        py-1
                        bg-gray-200
                        hover:bg-gray-300
                        cursor-pointer
                        focus:border-orange-400
                        focus:ring-orange-400
                    "
                    name="country"
                >
                    <option selected value="Philippines">Philippines</option>
                    <option value="United States">United States</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                </select>

                <div class="mt-4">
                    <label value="Name" class="-mb-1.5" />

                    <input
                        v-model="form.name"
                        type="text"
                        class="mt-1 block w-full"
                        required
                    >
                </div>



                <div class="mt-3">
                    <label class="-mb-1.5" value="Address" />

                    <input
                        type="text"
                        v-model="form.addr1"
                        class="mt-1 block w-full"
                        required
                        placeholder="Address line 1"
                    >

                    <input
                        type="text"
                        v-model="form.addr2"
                        class="mt-1 block w-full"
                        required
                        placeholder="Address line 2"
                    >
                </div>

                <div class="mt-3">
                    <div class="flex gap-2">
                        <div class="w-full">
                            <label class="-mb-1.5" value="City" />

                            <input
                                type="text"
                                v-model="form.city"
                                class="mt-1 block w-full"
                                required
                                placeholder="City"
                            />
                        </div>

                        <div class="w-full">
                            <label class="-mb-1.5" value="Postcode" />

                            <input
                                type="text"
                                v-model="form.postcode"
                                class="mt-1 block w-full"
                                required
                                placeholder="Postcode"
                            />
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button class="bg-yellow-400 px-3 font-bold text-[14px] rounded-lg shadow-sm cursor-pointer">
                        Add address
                    </button>
                </div>
            </form>
        </div>
    </Layout>
    {{ $page.props.auth.user }}
</template>

<script setup>
import Layout from '../../Shared/Layout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { toRefs } from 'vue'
import MapMarkerOutlineIcon from 'vue-material-design-icons/MapMarkerOutline.vue'
import PlusIcon from 'vue-material-design-icons/Plus.vue'
 

const page = usePage()
const form = useForm({
    country: 'Philippines',
    name: page.props.auth.user.name,
    addr1: '',
    addr2: '',
    city: '',
    postcode: '',
})

const submit = () => {
    form.post(route('address_options.store'), {
        onFinish: () => route('address.index'),
    })
}

</script>
