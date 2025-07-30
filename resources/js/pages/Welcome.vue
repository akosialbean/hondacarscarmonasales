<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar  from '@/components/TopNavbar.vue';
    import { ref, onMounted, onUnmounted } from 'vue';

    const images = ref([
        '/images/crv.png',
        '/images/honda.png',
    ]);

    const currentIndex = ref(0);
    let intervalId: number | null = null;
    const autoplayDelay = 3000;

    const nextSlide = () => {
        currentIndex.value = (currentIndex.value + 1 + images.value.length) % images.value.length;
    };

    const prevSlide = () => {
        currentIndex.value = (currentIndex.value - 1 + images.value.length) % images.value.length;
    };

    const goToSlide = (index: number) => {
        currentIndex.value = index;
    };

    const startAutoplay = () => {
        stopAutoplay();
        intervalId = setInterval(nextSlide, autoplayDelay);
    };

    const stopAutoplay = () => {
        if (intervalId) {
            clearInterval(intervalId);
            intervalId = null;
        }
    };

    onMounted(() => {
        startAutoplay();
    });

    onUnmounted(() => {
        stopAutoplay();
    });
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
    <Head title="Honda Cars Carmona Sales - Home"></Head>
    <TopNavbar />
    <div class="w-full pt-16">
        <div class="relative w-full" style="padding-bottom: 45%">
            <img
                v-for="(image, index) in images"
                :key="index"
                :src="image"
                alt="Honda Car"
                class="absolute w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                :class="{ 'opacity-100': currentIndex === index, 'opacity-0': currentIndex !== index }"
            />

        <button @click="prevSlide" class="absolute top-1/2 left-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 transition-all duration-300 focus:outline-none z-4" aria-label="Previous Slide">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button @click="nextSlide" class="absolute top-1/2 right-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 transition-all duration-300 focus:outline-none z-4" aria-label="Next Slide">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        <!-- <img src="/images/crv.png" alt="Honda Cars Carmona" class="w-full h-auto object-cover mt-7" /> -->

        <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 z-10">
            <button v-for="(images, index) in images" :key="index" @click="goToSlide(index)" class="w-3 h-3 bg-white rounded-full focus:outline-none" :class="{ 'bg-red-600': currentIndex === index }"></button>
        </div>
    </div>
        <div>
            <a href="#" class="bg-red-700 text-white mx-auto px-4 py-2 rounded-md hover:bg-red-500 transition-colors duration-300 text-center mt-10 font-semibold block max-w-xs mx-auto">
                Get a quote now
            </a>
        </div>

        <h1 class="font-boldest text-red-900 text-4xl md:text-6xl text-center mt-6 best-deals">Get the best deals here at Honda Cars Carmona</h1>
        <p class="font-bold text-gray-600 text-lg md:text-2xl text-center mt-5">Experience Top-Tier Service: Our Expert Agents are Ready to Help at Honda Cars Carmona!</p>

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
                        <img src="/images/brio.png" alt="Honda Brio" class="w-full h-48 object-cover mb-4 rounded-md">
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Promo 2</h3>
                        <img src="/images/city.png" alt="Honda City" class="w-full h-48 object-cover mb-4 rounded-md">
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mb-2">Promo 3</h3>
                        <img src="/images/brv.png" alt="Honda BR-V" class="w-full h-48 object-cover mb-4 rounded-md">
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="bg-gray-900 px-4 py-4 bottom-0 text-white text-center">
            <div class="container mx-auto py-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <img src="/images/logo.png" alt="Honda Cars Carmona Logo" class="w-full h-auto mb-4 mx-auto invert-color">
                        <p>Honda Cars Camona SLEX toll </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                        <p class="text-gray-400">email@email.com</p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold mb-2">Careers</h3>
                        <p class="text-gray-400"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
