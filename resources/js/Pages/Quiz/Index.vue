<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Quiz" />

    <AuthenticatedLayout>

        <template #header>
            <h2 class="text-2xl font-semibold text-gray-800">Quiz</h2>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow border border-gray-200">

                <h3 class="text-xl font-bold text-indigo-700 mb-4">Pergunta 1</h3>

                <p class="mb-6 text-gray-700">Qual é a capital do Brasil?</p>

                <ul class="space-y-3">
                    <li>
                        <button class="w-full text-left px-4 py-2 border border-gray-300 rounded-xl hover:bg-indigo-50 transition">
                            Rio de Janeiro
                        </button>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 border border-gray-300 rounded-xl hover:bg-indigo-50 transition">
                            Brasília
                        </button>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 border border-gray-300 rounded-xl hover:bg-indigo-50 transition">
                            São Paulo
                        </button>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 border border-gray-300 rounded-xl hover:bg-indigo-50 transition">
                            Salvador
                        </button>
                    </li>
                </ul>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
