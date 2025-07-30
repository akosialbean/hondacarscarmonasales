<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar from '@/components/TopNavbar.vue';
    import FooterLinks from '@/components/FooterLinks.vue';
</script>

<template>
    <Head title="Honda Cars Carmona Sales - Customer Reviews"></Head>
    <TopNavbar />

    <div class="container mx-auto px-4 py-6 mt-12">
        <h1 class="text-2xl font-bold my-4">Customer Reviews</h1>
        <p>Read what our customers have to say about their experience with Honda Cars Carmona.</p>
        <!-- Add customer reviews content here -->

        <div class="grid grid-cols-1 gap-6 mt-12">
            <div class="w-full bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Customer Name 1</h2>
                    <p class="text-gray-700">Review content goes here.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Rating: ★★★★☆</p>
                </div>
            </div>
            <!-- Repeat for more reviews -->
        </div>
    </div>

    <FooterLinks />
</template>