<script setup>
import { ref, onMounted } from 'vue';
import { router } from '@inertiajs/vue3'; 
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

// Recebe o quiz do backend
const props = defineProps({
    quiz: {
        type: Object,
        default: () => null // se não houver quiz, fica null
    }
});

const countdown = ref(3);

// Contagem regressiva e redirecionamento
onMounted(() => {
    // só inicia se o quiz existir
    if (props.quiz && props.quiz.id) {
        const timer = setInterval(() => {
            countdown.value--;

            if (countdown.value <= 0) {
                clearInterval(timer);
                router.get(route('quiz.index', props.quiz.id));
            }
        }, 1000);
    }
});
</script>

<template>
    <Head title="Iniciando Quiz" />

    <AuthenticatedLayout>
        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-200 w-full max-w-md text-center">
                <h3 class="text-2xl font-bold text-indigo-700 mb-4">
                    Preparando seu Quiz...
                </h3>

                <p class="text-gray-700 text-xl">
                    <!-- Se não tiver quiz, mostra mensagem alternativa -->
                    <span v-if="props.quiz && props.quiz.id">
                        Começando em {{ countdown }} segundos
                    </span>
                    <span v-else>
                        Nenhum quiz disponível no momento.
                    </span>
                </p>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
