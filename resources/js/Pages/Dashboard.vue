<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    top5: Array,   
    myTop5: Array  
});

function formatTime(seconds) {
    const min = Math.floor(seconds / 60).toString().padStart(2, '0');
    const sec = (seconds % 60).toString().padStart(2, '0');
    return `${min}:${sec}`;
}

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <nav class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800">Dashboard</h2>
                <div class="flex gap-6 text-lg font-medium">
                    <Link :href="route('dashboard')" class="hover:text-indigo-600 transition">Início</Link>
                    <Link :href="route('ranking.more')" class="hover:text-indigo-600 transition">Ranking Geral</Link>
                </div>
            </nav>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow border border-gray-200 flex flex-col">
                    <h3 class="text-xl font-bold mb-4 text-indigo-700">Ranking Geral – Top 5</h3>
                    <ul class="space-y-2 text-gray-700 flex-1">
                        <li v-for="(result, index) in top5" :key="result.id">
                            {{ index + 1 }}. {{ result.user.name }} — {{ result.score }} pts  — {{ formatTime(result.time_spent) }}
                        </li>
                    </ul>
                    <Link :href="route('ranking.more')" class="mt-5 inline-block w-full text-center py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
                        Ver mais
                    </Link>
                </div>

                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow border border-gray-200 flex flex-col items-center text-center">
                    <div class="w-full h-40 bg-gray-100 border border-dashed border-gray-300 rounded-xl mb-6 flex items-center justify-center text-gray-400">
                        Imagem aqui
                    </div>
                    <h3 class="text-xl font-bold text-indigo-700 mb-4">Pronto para começar?</h3>
                    <div class="mt-auto w-full">
                        <Link :href="route('quiz.start')" class="mt-5 inline-block w-full text-center py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
                            Iniciar Quiz
                        </Link>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow border border-gray-200 flex flex-col">
                    <h3 class="text-xl font-bold mb-4 text-indigo-700">Meu Ranking – Top 5</h3>
                    <ul class="space-y-2 text-gray-700 flex-1">
                        <li v-for="(result, index) in myTop5" :key="result.id">
                            Partida {{ index + 1 }} — {{ result.score }} pts  — {{ formatTime(result.time_spent) }}
                        </li>
                    </ul>
                    <Link :href="route('ranking.more-user')" class="mt-5 inline-block w-full text-center py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
                        Ver mais
                    </Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
