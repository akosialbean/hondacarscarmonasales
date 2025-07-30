<script setup lang="ts">
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
</template>