<script setup>
import { ref, onMounted, onBeforeUnmount, computed } from 'vue';
import { useForm, router } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    quiz: Object,
    questions: Array
});

const currentQuestion = ref(0);
const selectedOption = ref(null);
const answers = ref([]);
const finished = ref(false);
const timer = ref(0);
let interval = null;

const form = useForm({
    score: 0,
    total_questions: props.questions.length,
    time_spent: 0
});

// Cronômetro
onMounted(() => {
    interval = setInterval(() => {
        timer.value++;
    }, 1000);
});

onBeforeUnmount(() => {
    clearInterval(interval);
});

// Avança para próxima pergunta
function nextQuestion() {
    if (selectedOption.value !== null) {
        answers.value[currentQuestion.value] = selectedOption.value;
        selectedOption.value = null;

        if (currentQuestion.value + 1 < props.questions.length) {
            currentQuestion.value++;
        } else {
            calculateScore();
        }
    }
}

// Calcula pontuação final (não envia ainda)
function calculateScore() {
    clearInterval(interval);

    let score = 0;
    props.questions.forEach((q, idx) => {
        if (answers.value[idx] && answers.value[idx].is_correct) {
            score += 10;
        }
    });

    form.score = score;
    form.time_spent = timer.value; // salva o tempo
    finished.value = true; // mostra a tela de resultado
}

// Envia resultado e volta para dashboard
function goDashboard() {
    form.post(route('quiz.store', props.quiz.id), {
        onSuccess: () => router.get(route('dashboard'))
    });
}

// Cronômetro em mm:ss
const formattedTime = computed(() => {
    const minutes = Math.floor(timer.value / 60).toString().padStart(2, '0');
    const seconds = (timer.value % 60).toString().padStart(2, '0');
    return `${minutes}:${seconds}`;
});
</script>

<template>
    <Head :title="quiz.title" />

    <AuthenticatedLayout>
        <div class="py-10 px-4 max-w-2xl mx-auto">

            <!-- Quiz em andamento -->
            <div v-if="!finished">
                <div class="flex justify-between items-center mb-4 text-indigo-700 font-bold text-xl">
                    <span>Pergunta {{ currentQuestion + 1 }} / {{ questions.length }}</span>
                    <span>{{ formattedTime }}</span>
                </div>

                <p class="mb-6 text-gray-700 text-2xl font-semibold">
                    {{ questions[currentQuestion].text }}
                </p>

                <ul class="space-y-3">
                    <li v-for="option in questions[currentQuestion].options" :key="option.id">
                        <button
                            class="w-full text-left px-4 py-2 border rounded-xl hover:bg-indigo-50 transition"
                            :class="{'border-indigo-600 bg-indigo-100': selectedOption === option}"
                            @click="selectedOption = option"
                        >
                            {{ option.text }}
                        </button>
                    </li>
                </ul>

                <button
                    class="mt-4 w-full py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition font-semibold disabled:opacity-50"
                    :disabled="!selectedOption"
                    @click="nextQuestion"
                >
                    {{ currentQuestion + 1 === questions.length ? 'Finalizar' : 'Próxima' }}
                </button>
            </div>

            <!-- Resultado -->
            <div v-else class="text-center">
                <h2 class="text-3xl font-bold text-indigo-700 mb-4">
                    Você marcou {{ form.score }} / 100 pontos!
                </h2>
                <p class="mb-4 text-gray-500 text-lg">Tempo total: {{ formattedTime }}</p>

                <button
                    class="mt-4 w-full py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition font-semibold"
                    @click="goDashboard"
                >
                    Voltar para a tela inicial
                </button>
            </div>

        </div>
    </AuthenticatedLayout>
</template>
