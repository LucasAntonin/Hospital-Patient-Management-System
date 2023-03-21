<template>
    <div class="m-20 mt-20">
        <SearchBar/>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome da Mãe
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data de Nascimento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CPF
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CNS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Remove</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <PatientListing v-if="patients.length" v-for="patient in patients" :key="patient.id" :patient="patient"/>
                </tbody>
            </table>
        </div>
        <Link
            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            href="/patients/create" as="button">
            Registrar Paciente
        </Link>
    </div>
</template>

<script setup>
import PatientListing from "../../Components/PatientListing.vue";
import {Link} from "@inertiajs/vue3";
import SearchBar from "../../Components/SearchBar.vue";

defineProps({
    patients: Array
})
</script>
