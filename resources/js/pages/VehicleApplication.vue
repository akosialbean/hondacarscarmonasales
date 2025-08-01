<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar from '@/components/TopNavbar.vue';
    import FooterLinks from '@/components/FooterLinks.vue';

    const borrowerFields = [
        { name: 'lastName', label: 'Last Name', type: 'text', required: true },
        { name: 'firstName', label: 'First Name', type: 'text', required: true },
        { name: 'middleName', label: 'Middle Name', type: 'text', required: false },
        { name: 'birthDate', label: 'Date of Birth', type: 'date', required: true },
        { name: 'completeAddress', label: 'Complete Address', type: 'text', required: true },
        { name: 'contactNumber', label: 'Contact Number', type: 'text', required: true },
        { name: 'emailAddress', label: 'Email Address', type: 'email', required: true },
        { name: 'sourceOfIncome', label: 'Source of Income', type: 'text', required: true },
        { name: 'companyBusinessName', label: 'Company / Business Name', type: 'text', required: true },
        { name: 'monthlyIncome', label: 'Monthly Income', type: 'text', required: true },
        { name: 'validID', label: 'Valid ID', type: 'text', required: true },
    ];

    const coBorrowerFields = [
        { name: 'coBorrowerLastName', label: 'Last Name', type: 'text', required: true },
        { name: 'coBorrowerFirstName', label: 'First Name', type: 'text', required: true },
        { name: 'coBorrowerMiddleName', label: 'Middle Name', type: 'text', required: false },
        { name: 'coBorrowerBirthDate', label: 'Date of Birth', type: 'date', required: true },
        { name: 'coBorrowerAddress', label: 'Address', type: 'text', required: true },
        { name: 'coBorrowerContactNumber', label: 'Contact Number', type: 'text', required: true },
        { name: 'coBorrowerEmailAddress', label: 'Email Address', type: 'email', required: true },
        { name: 'coBorrowerSourceOfIncome', label: 'Source of Income', type: 'text', required: true },
        { name: 'coBorrowerCompanyBusinessName', label: 'Company / Business Name', type: 'text', required: true },
        { name: 'coBorrowerMonthlyIncome', label: 'Monthly Income', type: 'text', required: true },
        { name: 'coBorrowerValidID', label: 'Valid ID', type: 'text', required: true },
    ];

    const vehicleDetails = [
        { name: 'vehicleVodel', label: 'Model', type: 'text', required: true },
        { name: 'vehicleVariant', label: 'Variant', type: 'text', required: true },
        { name: 'vehicleColor', label: 'Color', type: 'text', required: true },
        { name: 'vehiclePrice', label: 'Price', type: 'text', required: true },
    ];
    
</script>

<template>
    <Head title="Honda Cars Carmona Sales - Vehicle Application"></Head>
    <TopNavbar class="mb-6" />
    <div class="container mx-auto px-4 py-6 mt-12">
        <h1 class="text-2xl font-bold my-4">Vehicle Application</h1>
        <p>Fill out the form below to apply for a vehicle.</p>
        <!-- Add application form content here -->

        <form class="bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Borrower's Information</h2>
                    <div v-for="field in borrowerFields" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700 font-bold">{{ field.label }}:</label>
                        <input :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Co-Borrower's Information</h2>
                    <div v-for="field in coBorrowerFields" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700">{{ field.label }}:</label>
                        <input :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                    </div>
                </div>

                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Vehicle Details</h2>
                    <div v-for="field in vehicleDetails" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700">{{ field.label }}:</label>
                        <input :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                    </div>
                </div>

                <button class="col-span-3 bg-red-600 text-white font-bold py-2 px-4 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="submit">
                    Submit Application
                </button>
            </div>
        </form>
    </div>
    <FooterLinks />
</template>