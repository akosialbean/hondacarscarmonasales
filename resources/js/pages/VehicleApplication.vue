<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar from '@/components/TopNavbar.vue';
    import FooterLinks from '@/components/FooterLinks.vue';
</script>

<template>
    <Head title="Honda Cars Carmona Sales - Vehicle Application"></Head>
    <TopNavbar class="mb-6" />
    <div class="container mx-auto px-4 py-6 mt-12">
        <h1 class="text-2xl font-bold my-4">Vehicle Application</h1>
        <p>Fill out the form below to apply for a vehicle.</p>
        <!-- Add application form content here -->

        <form class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" class="mt-1 block
                w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" required>
            </div>
        </form>
    </div>
    <FooterLinks />
</template>