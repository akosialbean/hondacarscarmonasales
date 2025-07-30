<script setup lang="ts">
    import { Head, Link } from '@inertiajs/vue3';
    import TopNavbar  from '@/components/TopNavbar.vue';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <TopNavbar />
    <img src="/images/crv.png" alt="Honda Cars Carmona" class="w-full h-auto object-cover mt-10" />
</template>
