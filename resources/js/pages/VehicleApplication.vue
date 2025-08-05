<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar from '@/components/TopNavbar.vue';
    import FooterLinks from '@/components/FooterLinks.vue';
    import Swal from 'sweetalert2';
    import { reactive } from 'vue';
    import ModernFileInput from '@/components/ModernFileInput.vue';

    const borrowerFields = [
        { name: 'lastName', label: 'Last Name', type: 'text', required: false },
        { name: 'firstName', label: 'First Name', type: 'text', required: false },
        { name: 'middleName', label: 'Middle Name', type: 'text', required: false },
        { name: 'birthDate', label: 'Date of Birth', type: 'date', required: false },
        { name: 'maritalStatus', label: 'Marital Status', type: 'select', required: false, options: { 1: 'Single', 2: 'Married', 3: 'Widowed', 4: 'Separated' } },
        { name: 'completeAddress', label: 'Complete Address', type: 'text', required: false },
        { name: 'contactNumber', label: 'Contact Number', type: 'text', required: false },
        { name: 'emailAddress', label: 'Email Address', type: 'email', required: false },
        { name: 'sourceOfIncome', label: 'Source of Income', type: 'text', required: false },
        { name: 'companyBusinessName', label: 'Company / Business Name', type: 'text', required: false },
        { name: 'monthlyIncome', label: 'Monthly Income', type: 'text', required: false },
    ];

    const coBorrowerFields = [
        { name: 'coBorrowerLastName', label: 'Last Name', type: 'text', required: false },
        { name: 'coBorrowerFirstName', label: 'First Name', type: 'text', required: false },
        { name: 'coBorrowerMiddleName', label: 'Middle Name', type: 'text', required: false },
        { name: 'coBorrowerBirthDate', label: 'Date of Birth', type: 'date', required: false },
        { name: 'coBorrowerMaritalStatus', label: 'Marital Status', type: 'select', required: false, options: { 1: 'Single', 2: 'Married', 3: 'Widowed', 4: 'Separated' } },
        { name: 'coBorrowerAddress', label: 'Complete Address', type: 'text', required: false },
        { name: 'coBorrowerContactNumber', label: 'Contact Number', type: 'text', required: false },
        { name: 'coBorrowerEmailAddress', label: 'Email Address', type: 'email', required: false },
        { name: 'coBorrowerSourceOfIncome', label: 'Source of Income', type: 'text', required: false },
        { name: 'coBorrowerCompanyBusinessName', label: 'Company / Business Name', type: 'text', required: false },
        { name: 'coBorrowerMonthlyIncome', label: 'Monthly Income', type: 'text', required: false },
    ];

    const vehicleDetails = [
        { name: 'vehicleVodel', label: 'Model', type: 'text', required: false },
        { name: 'vehicleVariant', label: 'Variant', type: 'text', required: false },
        { name: 'vehicleColor', label: 'Color', type: 'text', required: false },
        { name: 'vehiclePrice', label: 'Price', type: 'text', required: false },
    ];

    const formData = reactive({} as Record<string, any>);

    const clearForm = () => {
        for (const key in formData) {
            delete formData[key];
        }
    };

    const handleFileSelected = (file: File | null) => {
        formData.validID = file;
    };

    const handleCoBorrowerFileSelected = (file: File | null) => {
        formData.coBorrowerValidID = file;
    };

    const handleSubmit = () => {
        console.log(formData);
        Swal.fire({
            title: 'Submit Application?',
            text: "Please review your application before submitting.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Submitted!',
                    'Your application has been submitted.',
                    'success'
                ).then(() => {
                    clearForm();
                });
            }
        })
    }
    
</script>

<template>
    <Head title="Honda Cars Carmona Sales - Vehicle Application"></Head>
    <TopNavbar class="mb-6" />
    <div class="container mx-auto px-4 py-6 mt-12">
        <h1 class="text-2xl font-bold my-4">Vehicle Application</h1>
        <p>Fill out the form below to apply for a vehicle.</p>
        <!-- Add application form content here -->

        <form @submit.prevent="handleSubmit" class="bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Borrower's Information</h2>
                    <div v-for="field in borrowerFields" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700 font-bold">{{ field.label }}:</label>
                        <input v-if="field.type !== 'select'" v-model="formData[field.name]" :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                        <select v-else v-model="formData[field.name]" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                            <option disabled value="">Please select one</option>
                            <option v-for="(label, value) in field.options" :key="value" :value="value">{{ label }}</option>
                        </select>
                    </div>
                    <label for="validID" class="block text-sm font-medium text-gray-700 font-bold">Valid ID:</label>
                    <ModernFileInput @file-selected="handleFileSelected" accept="image/*" />
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Co-Borrower's Information</h2>
                    <div v-for="field in coBorrowerFields" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700">{{ field.label }}:</label>
                        <input v-if="field.type !== 'select'" v-model="formData[field.name]" :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                        <select v-else v-model="formData[field.name]" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                            <option disabled value="">Please select one</option>
                            <option v-for="(label, value) in field.options" :key="value" :value="value">{{ label }}</option>
                        </select>
                    </div>
                    <label for="coBorrowerValidID" class="block text-sm font-medium text-gray-700">Valid ID:</label>
                    <ModernFileInput @file-selected="handleCoBorrowerFileSelected" accept="image/*" />
                </div>

                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Vehicle Details</h2>
                    <div v-for="field in vehicleDetails" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700">{{ field.label }}:</label>
                        <input v-model="formData[field.name]" :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
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