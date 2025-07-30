<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar  from '@/components/TopNavbar.vue';
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Mogra&display=swap');

    .best-deals {
        font-family: 'Bangers', cursive;
    }

    .invert-color {
        filter: invert(1);
    }
</style>

<template>
    <Head title="Honda Cars Carmona Sales">
        <!-- <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" /> -->
    </Head>
    <TopNavbar />
    <div class="w-full">
        <img src="/images/crv.png" alt="Honda Cars Carmona" class="w-full h-auto object-cover mt-7" />
        <div>
            <a href="#" class="bg-red-700 text-white mx-auto px-4 py-2 rounded-md hover:bg-red-800 transition-colors duration-300 text-center mt-10 font-semibold block max-w-xs mx-auto">
                Get a quote now
            </a>
        </div>

        <h1 class="font-boldest text-red-900 text-6xl text-center mt-6 best-deals">Get the best deals here at Honda Cars Carmona</h1>
        <p class="font-bold text-gray-600 text-2xl text-center mt-5">Experience Top-Tier Service: Our Expert Agents are Ready to Help at Honda Cars Carmona!</p>

        <div class="mt-10 border border-gray-300 pt-6">
            <div class="container mx-auto py-12">
                <h2 class="text-3xl font-bold text-center mb-6">Why Choose Us?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Wide Range of Vehicles</h3>
                        <p class="text-gray-700">Explore our extensive selection of Honda vehicles.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Competitive Pricing</h3>
                        <p class="text-gray-700">Get the best value for your money with our competitive prices.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Exceptional Customer Service</h3>
                        <p class="text-gray-700">Our team is dedicated to providing you with the best service possible.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-700 mt-10">
            <div class="container mx-auto py-12">
                <h2 class="text-4xl font-bold text-white text-center mb-6">Our Latest Promotions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Promo 1</h3>
                        <p class="text-gray-700">Details about the first promotion.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Promo 2</h3>
                        <p class="text-gray-700">Details about the second promotion.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Promo 3</h3>
                        <p class="text-gray-700">Details about the third promotion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="bg-gray-900 px-4 py-4 bottom-0 text-white text-center mt-10">
            <div class="container mx-auto py-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <img src="/images/logo.png" alt="Honda Cars Carmona Logo" class="w-24 h-auto mb-4 mx-auto invert-color">
                        <p>Honda Cars Camona SLEX toll </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                        <p class="text-gray-400">Email: </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                        <p class="text-gray-400">Email: </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
