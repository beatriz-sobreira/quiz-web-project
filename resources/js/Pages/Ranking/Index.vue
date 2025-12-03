<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    results: Array 
});

function formatTime(seconds) {
    const min = Math.floor(seconds / 60).toString().padStart(2, '0');
    const sec = (seconds % 60).toString().padStart(2, '0');
    return `${min}:${sec}`;
}
</script>

<template>
    <Head title="Ranking Geral" />

    <AuthenticatedLayout>

        <template #header>
            <nav class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800">Ranking Geral</h2>
                <div class="flex gap-6 text-lg font-medium">
                    <Link :href="route('dashboard')" class="hover:text-indigo-600 transition">Início</Link>
                    <Link :href="route('ranking.more-user')" class="hover:text-indigo-600 transition">Meu Ranking</Link>
                </div>
            </nav>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow border border-gray-200">

                <h3 class="text-2xl font-bold text-indigo-700 mb-6">
                    Ranking Geral – Todos os usuários
                </h3>

                <ul class="space-y-3 text-gray-700">
                    <li v-for="(result, index) in results" :key="result.id">
                        {{ index + 1 }}. {{ result.user.name }} — {{ result.score }} pts — {{ formatTime(result.time_spent) }}
                    </li>
                </ul>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
