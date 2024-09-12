<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
            <form @submit.prevent="handleRegister">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="name"
                        >Name</label
                    >
                    <input
                        type="text"
                        id="name"
                        v-model="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="address"
                        >Address</label
                    >
                    <input
                        type="text"
                        id="address"
                        v-model="address"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="phone_number"
                        >Phone Number</label
                    >
                    <input
                        type="number"
                        id="phone_number"
                        v-model="phone_number"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="sim_number"
                        >SIM Number</label
                    >
                    <input
                        type="number"
                        id="sim_number"
                        v-model="sim_number"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    Register
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            address: "",
            phone_number: "",
            sim_number: "",
        };
    },
    methods: {
        handleRegister() {
            // Lakukan proses register, misalnya panggil API
            console.log("Name:", this.name);
            console.log("Address:", this.address);
            console.log("Phone Number:", this.phone_number);
            console.log("SIM Number:", this.sim_number);
        },
    },
};
</script>
