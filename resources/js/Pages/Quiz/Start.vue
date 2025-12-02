<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Iniciar Quiz" />

    <AuthenticatedLayout>

        <template #header>
            <h2 class="text-2xl font-semibold text-gray-800">Iniciar Quiz</h2>
        </template>

        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-200 w-full max-w-md text-center">

                <!-- Espaço para imagem -->
                <div class="w-full h-40 bg-gray-100 border border-dashed border-gray-300 rounded-xl mb-6 flex items-center justify-center text-gray-400">
                    Imagem do Quiz
                </div>

                <h3 class="text-xl font-bold text-indigo-700 mb-6">Pronto para começar?</h3>

                <Link
                    :href="route('quiz.index')"
                    class="w-full py-3 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition font-semibold"
                >
                    Iniciar Quiz
                </Link>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
