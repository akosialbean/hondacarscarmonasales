<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar  from '@/components/TopNavbar.vue';
    import FooterLinks from '@/components/FooterLinks.vue';
</script>

<template>
    <Head title="Honda Cars Carmona Sales - Promos"></Head>
    <TopNavbar class="mb-6" />
    <div class="container mx-auto px-4 py-6 mt-12">
        <h1 class="text-2xl font-bold my-4">Promos</h1>
        <p>Check out our latest promotions and offers!</p>
        <!-- Add promo content here -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Promo Title 1</h2>
                    <p class="text-gray-700">Details about promo 1.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Promo footer text</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Promo Title 2</h2>
                    <p class="text-gray-700">Details about promo 2.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Promo footer text</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Promo Title 3</h2>
                    <p class="text-gray-700">Details about promo 3.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Promo footer text</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Promo Title 4</h2>
                    <p class="text-gray-700">Details about promo 4.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Promo footer text</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Promo Title 5</h2>
                    <p class="text-gray-700">Details about promo 5.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Promo footer text</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
                <div class="flex-grow">
                    <h2 class="text-xl font-semibold mb-2">Promo Title 6</h2>
                    <p class="text-gray-700">Details about promo 6.</p>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Promo footer text</p>
                </div>
            </div>
        </div>
    </div>
    <FooterLinks />
</template>