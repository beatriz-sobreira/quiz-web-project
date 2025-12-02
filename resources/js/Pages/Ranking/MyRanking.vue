<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Meu Ranking" />

    <AuthenticatedLayout>

        <template #header>
            <h2 class="text-2xl font-semibold text-gray-800">Meu Ranking</h2>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow border border-gray-200">

                <h3 class="text-2xl font-bold text-indigo-700 mb-6">Todas as suas partidas</h3>

                <ul class="space-y-3 text-gray-700">
                    <li>Partida 1 — 980 pts</li>
                    <li>Partida 2 — 920 pts</li>
                    <li>Partida 3 — 900 pts</li>
                    <li>Partida 4 — 870 pts</li>
                    <li>Partida 5 — 860 pts</li>
                    <li>Partida 6 — 850 pts</li>
                    <li>Partida 7 — 830 pts</li>
                </ul>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
