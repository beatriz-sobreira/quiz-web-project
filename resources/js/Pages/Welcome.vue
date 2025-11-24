<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">

        <h1 class="text-4xl font-bold mb-8">
            Bem-vinda ao Quiz Web! 🎉
        </h1>

        <div class="flex gap-4">
            <Link
                href="/login"
                class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
            >
                Login
            </Link>

            <Link
                href="/register"
                class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700"
            >
                Criar Conta
            </Link>
        </div>

    </div>
</template>
