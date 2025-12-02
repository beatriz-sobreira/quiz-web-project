<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Ranking" />

    <AuthenticatedLayout>

        <template #header>
            <nav class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold text-gray-800">
                    Ranking
                </h2>

                <div class="flex gap-6 text-lg font-medium">
                    <Link :href="route('dashboard')" class="hover:text-indigo-600 transition">Início</Link>
                    <Link :href="route('ranking')" class="hover:text-indigo-600 transition">Ranking</Link>
                </div>
            </nav>
        </template>

        <div class="py-10 px-4">
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow border border-gray-200">

                <h3 class="text-2xl font-bold text-indigo-700 mb-6">
                    🏆 Ranking Completo – Top 10
                </h3>

                <ul class="space-y-3 text-gray-700">
                    <li>1. Usuário A — 980 pts</li>
                    <li>2. Usuário B — 930 pts</li>
                    <li>3. Usuário C — 900 pts</li>
                    <li>4. Usuário D — 870 pts</li>
                    <li>5. Usuário E — 860 pts</li>
                    <li>6. Usuário F — 850 pts</li>
                    <li>7. Usuário G — 830 pts</li>
                    <li>8. Usuário H — 820 pts</li>
                    <li>9. Usuário I — 810 pts</li>
                    <li>10. Usuário J — 800 pts</li>
                </ul>

            </div>
        </div>

    </AuthenticatedLayout>
</template>
