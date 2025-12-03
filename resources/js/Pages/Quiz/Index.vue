<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
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

const form = useForm({
    score: 0,
    total_questions: props.questions.length
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

// Calcula a pontuação final
function calculateScore() {
    let score = 0;
    props.questions.forEach((q, idx) => {
        if (answers.value[idx] && answers.value[idx].is_correct) {
            score += 10;
        }
    });

    form.score = score;
    finished.value = true;
}

// Reinicia o quiz
function restartQuiz() {
    currentQuestion.value = 0;
    selectedOption.value = null;
    answers.value = [];
    finished.value = false;
    form.score = 0;
}
</script>

<template>
    <Head :title="quiz.title" />

    <AuthenticatedLayout>
        <div class="py-10 px-4 max-w-2xl mx-auto">

            <div v-if="!finished">
                <h2 class="text-xl font-bold mb-4 text-indigo-700">
                    Pergunta {{ currentQuestion + 1 }} / {{ questions.length }}
                </h2>

                <p class="mb-6 text-gray-700">{{ questions[currentQuestion].text }}</p>

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

            <div v-else class="text-center">
                <h2 class="text-2xl font-bold text-indigo-700 mb-4">Você marcou {{ form.score }} / 100 pontos!</h2>
                <button
                    class="mt-4 w-full py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition font-semibold"
                    @click="restartQuiz"
                >
                    Voltar para a tela inicial
                </button>
            </div>

        </div>
    </AuthenticatedLayout>
</template>
