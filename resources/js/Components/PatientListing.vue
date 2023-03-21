<template>
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <Link :href="`/patients/${patient.id}`">
                {{ patient.name }}
                </Link>
            </th>
            <td class="px-6 py-4">
                {{ patient.mother_name }}
            </td>
            <td class="px-6 py-4">
                {{ patient.date_of_birth }}
            </td>
            <td class="px-6 py-4">
                {{ patient.cpf }}
            </td>
            <td class="px-6 py-4">
                {{ patient.cns }}
            </td>
        <td class="px-6 py-4 text-right">
            <Link :href="`/patients/${patient.id}/edit`"
                  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                Edit
            </Link>
        </td>
        <td class="px-6 py-4">
            <Link :href="`/patients/${patient.id}`" method="DELETE"
                  class="font-medium text-red-600 dark:text-red-500 hover:underline">
                Deletar
            </Link>
        </td>
    </tr>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    patient: Object,
})
</script>
