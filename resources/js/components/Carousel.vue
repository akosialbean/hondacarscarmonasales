<template>
  <div class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      <div v-for="(image, index) in images" :key="index" :class="{ 'hidden': activeIndex !== index }" class="duration-700 ease-in-out">
        <img :src="image.src" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" :alt="image.alt">
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-5 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button v-for="(image, index) in images" :key="index" type="button" class="w-3 h-3 rounded-full" :class="{ 'bg-white': activeIndex === index, 'bg-gray-400': activeIndex !== index }" @click="goToSlide(index)"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-5 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" @click="prevSlide">
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 focus:ring-4 focus:ring-white">
        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-5 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" @click="nextSlide">
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 focus:ring-4 focus:ring-white">
        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';

const props = defineProps({
  images: {
    type: Array,
    required: true,
  },
});

const activeIndex = ref(0);

const prevSlide = () => {
  activeIndex.value = (activeIndex.value - 1 + props.images.length) % props.images.length;
};

const nextSlide = () => {
  activeIndex.value = (activeIndex.value + 1) % props.images.length;
};

const goToSlide = (index) => {
  activeIndex.value = index;
};

onMounted(() => {
  setInterval(() => {
    nextSlide();
  }, 5000);
});
</script>