<script setup lang="ts">
    import { ref } from 'vue';
    
    const isOpen = ref(false);

    const toggleMenu = () => {
        isOpen.value = !isOpen.value;
    }

    const navItems = [
        { title: 'Home', href: '#', icon: 'i-heroicons-home-solid' },
        { title: 'Cars', href: '#', icon: 'i-heroicons-home-solid' },
        { title: 'Promos', href: '#', icon: 'i-heroicons-home-solid' },
    ];
</script>

<template>
    <nav class="fixed top-0 w-full bg-red-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <!-- LOGO -->
            <div class="text-white text-2xl font-bold rounded-md px-3 py-2">
                Honda Cars Carmona Sales
            </div> 

            <!-- MOBILE MENU -->
            <div class="md:hidden">
                <button @click="toggleMenu" class="text-white focus:outline-none">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                        <path v-if="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M-4 18h16"></path>
                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex space-x-4">
                <a v-for="item in navItems" :key="item.title" :href="item.href" class="text-white hover:text-gray-300 hover:bg-gray-700 hover:text-white px-3 rounded-md font-medium">
                    <i :class="item.icon"></i>
                    {{ item.title }}
                </a>
            </div>

            <!-- MOBILE MENU DROPDOWN -->
            <div v-if="isOpen" class="md:hidden mt-4">
                <div class="flex flex-col space-y-2">
                    <a href="#" class="text-gray-700 hover:text-gray-300 hover:bg-gray-700">Test</a>
                </div>
            </div>
        </div>
    </nav>
</template>