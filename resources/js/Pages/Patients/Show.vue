<template>
    <div class="flex items-center justify-center h-screen">
        <div
            class="w-full max-w-2xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="m-20">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Nome:</h1>
                        <p class="text-md">{{ patient.name }}</p>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Nome da Mãe:</h1>
                        <p class="text-md">{{ patient.mother_name }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Data de Nascimento:</h1>
                        <p class="text-md">{{ patient.date_of_birth }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">CPF:</h1>
                        <p class="text-md">{{ patient.cpf }}</p>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">CNS:</h1>
                        <p class="text-md">{{ patient.cns }}</p>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Cep:</h1>
                        <p class="text-md">{{ address.cep }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Endereço:</h1>
                        <p class="text-md">{{ address.endereco }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Numero:</h1>
                        <p class="text-md">{{ address.numero }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Complemento:</h1>
                        <p class="text-md">{{ address.complemento }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Bairro:</h1>
                        <p class="text-md">{{ address.bairro }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Estado:</h1>
                        <p class="text-md">{{ address.estado }}</p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <h1 class="mb-2 text-lg">Cidade:</h1>
                        <p class="text-md">{{ address.cidade }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    patient: Object,
    address: Object,
})

</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>



