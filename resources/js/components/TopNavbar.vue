<script setup lang="ts">
    import { ref } from 'vue';
    
    const isOpen = ref(false);

    const toggleMenu = () => {
        isOpen.value = !isOpen.value;
    }

    const navItems = [
        { title: 'Home', href: '/', icon: 'i-heroicons-home-solid' },
        { title: 'Promos', href: '/promos', icon: 'i-heroicons-home-solid' },
        { title: 'Reviews', href: '/reviews', icon: 'i-heroicons-home-solid' },
    ];
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
    <nav class="fixed top-0 w-full bg-red-600 shadow-lg z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- LOGO AND BRAND NAME -->
                <div class="flex items-center">
                    <img src="/images/logo.png" alt="Honda Logo" class="h-10 w-auto invert-color">
                    <div class="flex-shrink-0 text-white text-2xl font-bold ml-4">
                        <h1 class="hidden md:block">Honda Cars Carmona Sales</h1>
                        <h1 class="block md:hidden">HCCS</h1>
                    </div>
                </div>

                <!-- DESKTOP MENU -->
                <div class="hidden md:flex space-x-4">
                    <a v-for="item in navItems" :key="item.title" :href="item.href" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">
                        {{ item.title }}
                    </a>
                    <a href="/vehicleapplication" class="bg-red-900 hover:bg-red-600 text-white hover:text-white px-3 py-2 rounded-md font-medium border border-white block">
                        <span class="hidden lg:inline">Apply Here</span>
                        <span class="lg:hidden">Apply</span>
                    </a>
                </div>

                <!-- MOBILE MENU BUTTON -->
                <div class="md:hidden flex items-center">
                    <button @click="toggleMenu" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path v-if="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE MENU DROPDOWN -->
        <div v-if="isOpen" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a v-for="item in navItems" :key="item.title" :href="item.href" class="text-white hover:bg-red-700 block px-3 py-2 rounded-md text-base font-medium">
                    {{ item.title }}
                </a>
                <a href="#" class="bg-red-900 hover:bg-red-600 text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium border border-white block">
                    Apply
                </a>
            </div>
        </div>
    </nav>
</template>