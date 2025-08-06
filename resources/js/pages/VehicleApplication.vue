<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import TopNavbar from '@/components/TopNavbar.vue';
    import FooterLinks from '@/components/FooterLinks.vue';
    import Swal from 'sweetalert2';
    import { reactive } from 'vue';
    import ModernFileInput from '@/components/ModernFileInput.vue';

    const borrowerFields = [
        { name: 'lastName', label: 'Last Name', type: 'text', required: true },
        { name: 'firstName', label: 'First Name', type: 'text', required: true },
        { name: 'middleName', label: 'Middle Name', type: 'text', required: false },
        { name: 'birthDate', label: 'Date of Birth', type: 'date', required: true },
        { name: 'maritalStatus', label: 'Marital Status', type: 'select', required: true, options: { 1: 'Single', 2: 'Married', 3: 'Widowed', 4: 'Separated' } },
        { name: 'completeAddress', label: 'Complete Address', type: 'text', required: true },
        { name: 'contactNumber', label: 'Contact Number', type: 'text', required: true },
        { name: 'emailAddress', label: 'Email Address', type: 'email', required: true },
        { name: 'sourceOfIncome', label: 'Source of Income', type: 'text', required: true },
        { name: 'companyBusinessName', label: 'Company / Business Name', type: 'text', required: true },
        { name: 'monthlyIncome', label: 'Monthly Income', type: 'text', required: true },
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
        { name: 'vehicleModel', label: 'Model', type: 'text', required: true },
        { name: 'vehicleVariant', label: 'Variant', type: 'text', required: true },
        { name: 'vehicleColor', label: 'Color', type: 'text', required: true },
        { name: 'vehiclePrice', label: 'Price', type: 'text', required: true },
    ];

    const initialFormData = () => {
        const data: Record<string, any> = {};
        borrowerFields.forEach(f => data[f.name] = '');
        coBorrowerFields.forEach(f => data[f.name] = '');
        vehicleDetails.forEach(f => data[f.name] = '');
        data.validID = null;
        data.coBorrowerValidID = null;
        return data;
    }

    const formData = reactive(initialFormData());

    const validationState = reactive({
        contactNumber: true,
        coBorrowerContactNumber: true,
    });

    const clearForm = () => {
        Object.assign(formData, initialFormData());
    };

    const handleFileSelected = (file: File | null, fieldName: 'validID' | 'coBorrowerValidID') => {
        formData[fieldName] = file;
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
                // In a real application, you would send the formData to the server here.
                // For now, we'll just show a success message.
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

    const formatPhoneNumber = (fieldName: 'contactNumber' | 'coBorrowerContactNumber') => {
        const value = formData[fieldName];
        if (!value) {
            validationState[fieldName] = true;
            return;
        }

        let digits = value.replace(/\D/g, '');

        if (digits.length > 0 && digits.charAt(0) !== '0') {
            digits = '0' + digits;
        }

        if (digits.length > 1) {
            const secondDigit = digits.charAt(1);
            validationState[fieldName] = secondDigit === '9' || secondDigit === '8';
        } else {
            validationState[fieldName] = true;
        }
        
        digits = digits.substring(0, 11);

        let formatted = '';
        if (digits.length > 0) {
            formatted = digits.substring(0, 4);
        }
        if (digits.length > 4) {
            formatted += ' ' + digits.substring(4, 7);
        }
        if (digits.length > 7) {
            formatted += ' ' + digits.substring(7, 11);
        }

        if (formData[fieldName] !== formatted) {
            formData[fieldName] = formatted;
        }
    };
    
</script>

<template>
    <Head title="Honda Cars Carmona Sales - Vehicle Application"></Head>
    <TopNavbar class="mb-6" />
    <div class="container mx-auto px-4 py-6 mt-12">
        <h1 class="text-2xl font-bold my-4">Vehicle Application</h1>
        <p>Fill out the form below to apply for a vehicle.</p>

        <form @submit.prevent="handleSubmit" class="bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Borrower's Information</h2>
                    <div v-for="field in borrowerFields" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700 font-bold">{{ field.label }}:</label>
                        <input v-if="field.type !== 'select'" v-model="formData[field.name]" :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :class="{ '!border-red-500': field.name === 'contactNumber' && !validationState.contactNumber }" :required="field.required" @input="field.name === 'contactNumber' && formatPhoneNumber('contactNumber')">
                        <select v-else v-model="formData[field.name]" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                            <option disabled value="">Please select one</option>
                            <option v-for="(label, value) in field.options" :key="value" :value="value">{{ label }}</option>
                        </select>
                    </div>
                    <label for="validID" class="block text-sm font-medium text-gray-700 font-bold">Valid ID:</label>
                    <ModernFileInput @file-selected="handleFileSelected($event, 'validID')" accept="image/*" />
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Co-Borrower's Information</h2>
                    <div v-for="field in coBorrowerFields" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700 font-bold">{{ field.label }}:</label>
                        <input v-if="field.type !== 'select'" v-model="formData[field.name]" :type="field.type" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :class="{ '!border-red-500': field.name === 'coBorrowerContactNumber' && !validationState.coBorrowerContactNumber }" :required="field.required" @input="field.name === 'coBorrowerContactNumber' && formatPhoneNumber('coBorrowerContactNumber')">
                        <select v-else v-model="formData[field.name]" :id="field.name" :name="field.name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" :required="field.required">
                            <option disabled value="">Please select one</option>
                            <option v-for="(label, value) in field.options" :key="value" :value="value">{{ label }}</option>
                        </select>
                    </div>
                    <label for="coBorrowerValidID" class="block text-sm font-medium text-gray-700 font-bold">Valid ID:</label>
                    <ModernFileInput @file-selected="handleFileSelected($event, 'coBorrowerValidID')" accept="image/*" />
                </div>

                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Vehicle Details</h2>
                    <div v-for="field in vehicleDetails" :key="field.name" class="mb-4">
                        <label :for="field.name" class="block text-sm font-medium text-gray-700 font-bold">{{ field.label }}:</label>
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