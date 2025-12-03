<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    results: Array 
});
</script>

<template>
    <Head title="Meu Ranking" />

    <AuthenticatedLayout>
        <template #header>
            <nav class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800">Meu Ranking</h2>
                <div class="flex gap-6 text-lg font-medium">
                    <Link :href="route('dashboard')" class="hover:text-indigo-600 transition">Início</Link>
                    <Link :href="route('ranking')" class="hover:text-indigo-600 transition">Ranking</Link>
                </div>
            </nav>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-4xl mx-auto bg-white/80 backdrop-blur p-8 rounded-2xl shadow border border-gray-200">

                <h3 class="text-2xl font-bold text-indigo-700 mb-6">Suas Partidas</h3>

                <ul class="space-y-3 text-gray-700">
                    <li v-for="(result, index) in results" :key="result.id">
                        Partida {{ index + 1 }} — {{ result.score }} pts
                    </li>
                </ul>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
