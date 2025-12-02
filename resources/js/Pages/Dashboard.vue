<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <template #header>
            <nav class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800">
                    Dashboard
                </h2>

                <div class="flex gap-6 text-lg font-medium">
                    <Link :href="route('dashboard')" class="hover:text-indigo-600 transition">Início</Link>
                    <Link :href="route('ranking')" class="hover:text-indigo-600 transition">Ranking</Link>
                </div>
            </nav>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow border border-gray-200">
                    <h3 class="text-xl font-bold mb-4 text-indigo-700">🏆 Ranking Geral – Top 5</h3>

                    <ul class="space-y-2 text-gray-700">
                        <li>1. Usuário A – 980 pts</li>
                        <li>2. Usuário B – 930 pts</li>
                        <li>3. Usuário C – 900 pts</li>
                        <li>4. Usuário D – 870 pts</li>
                        <li>5. Usuário E – 860 pts</li>
                    </ul>

                    <Link
                        :href="route('ranking.more')"
                        class="mt-5 inline-block w-full text-center py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition"
                    >
                        Ver mais
                    </Link>
                </div>

                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow border border-gray-200 flex flex-col items-center justify-center text-center">
                    
                    <div class="w-full h-40 bg-gray-100 border border-dashed border-gray-300 rounded-xl mb-6 flex items-center justify-center text-gray-400">
                        Imagem aqui
                    </div>

                    <h3 class="text-xl font-bold text-indigo-700 mb-4">Pronto para começar?</h3>

                    <Link
                        :href="route('quiz.start')"
                        class="w-full py-3 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition font-semibold"
                    >
                        Iniciar Quiz
                    </Link>
                </div>
                
                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow border border-gray-200">
                    <h3 class="text-xl font-bold mb-4 text-indigo-700">📊 Seu Ranking – Top 5</h3>

                    <ul class="space-y-2 text-gray-700">
                        <li>1. Você — 980 pts</li>
                        <li>2. Você — 920 pts</li>
                        <li>3. Você — 900 pts</li>
                        <li>4. Você — 870 pts</li>
                        <li>5. Você — 860 pts</li>
                    </ul>

                    <Link
                        :href="route('ranking.more-user')"
                        class="mt-5 inline-block w-full text-center py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition"
                    >
                        Ver mais
                    </Link>
                </div>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
