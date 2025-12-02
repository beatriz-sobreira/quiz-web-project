<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 px-4">
        
        <div class="bg-white/10 backdrop-blur-lg p-10 rounded-2xl shadow-xl text-center max-w-md w-full border border-white/20">
            
            <h1 class="text-4xl font-extrabold text-white drop-shadow mb-4">
                Bem-vindo ao Quiz Web!
            </h1>

            <p class="text-white/90 mb-8">
                Teste seus conhecimentos e divirta-se jogando.
            </p>

            <div class="flex flex-col gap-4">
                <Link
                    href="/login"
                    class="w-full py-3 bg-white text-indigo-600 font-semibold rounded-xl shadow hover:bg-gray-100 transition"
                >
                    Login
                </Link>

                <Link
                    href="/register"
                    class="w-full py-3 bg-indigo-700 text-white font-semibold rounded-xl shadow hover:bg-indigo-800 transition"
                >
                    Criar Conta
                </Link>
            </div>

        </div>

    </div>
</template>
