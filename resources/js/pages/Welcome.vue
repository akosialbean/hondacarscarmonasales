<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar  from '@/components/TopNavbar.vue';
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Mogra&display=swap');

    .best-deals {
        font-family: 'Bangers', cursive;
    }
</style>

<template>
    <Head title="Honda Cars Carmona Sales">
        <!-- <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" /> -->
    </Head>
    <TopNavbar />
    <div class="container mx-auto px-4 py-8 mt-4">
        <img src="/images/crv.png" alt="Honda Cars Carmona" class="w-full h-auto object-cover mt-10" />
        <div>
            <a href="#" class="bg-red-700 text-white mx-auto px-4 py-2 rounded-md hover:bg-red-800 transition-colors duration-300 text-center mt-10 font-semibold block max-w-xs mx-auto">
                Get a quote now
            </a>
        </div>

        <h1 class="font-boldest text-red-900 text-6xl text-center mt-6 best-deals">Get the best deals here at Honda Cars Carmona</h1>
        <p class="font-bold text-gray-600 text-2xl text-center mt-5">Experience Top-Tier Service: Our Expert Agents are Ready to Help at Honda Cars Carmona!</p>

        <div class="mt-10">
            <h2 class="text-3xl font-bold text-center mb-6">Why Choose Us?</h2>
            <ul class="list-disc list-inside space-y-4 max-w-2xl mx-auto">
                <li class="text-lg text-gray-700">Wide Range of Vehicles</li>
                <li class="text-lg text-gray-700">Competitive Pricing</li>
                <li class="text-lg text-gray-700">Exceptional Customer Service</li>
                <li class="text-lg text-gray-700">Flexible Financing Options</li>
            </ul>
        </div>  
    </div>
    
</template>
