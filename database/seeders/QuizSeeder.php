<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;
use Illuminate\Support\Str;

class QuizSeeder extends Seeder
{
    public function run()
    {

        $quiz = Quiz::create([
            'title' => 'Quiz de Conhecimentos Gerais',
            'description' => 'Teste seus conhecimentos gerais em diversas áreas!',
            'slug' => Str::slug('Quiz de Conhecimentos Gerais'),
        ]);

        $questions = [
            [
                'text' => 'Qual linguagem de programação é orientada a objetos?',
                'options' => [
                    ['text' => 'Python', 'is_correct' => true],
                    ['text' => 'HTML', 'is_correct' => false],
                    ['text' => 'SQL', 'is_correct' => false],
                    ['text' => 'CSS', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é o maior planeta do Sistema Solar?',
                'options' => [
                    ['text' => 'Júpiter', 'is_correct' => true],
                    ['text' => 'Saturno', 'is_correct' => false],
                    ['text' => 'Terra', 'is_correct' => false],
                    ['text' => 'Marte', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a capital do Brasil?',
                'options' => [
                    ['text' => 'Brasília', 'is_correct' => true],
                    ['text' => 'São Paulo', 'is_correct' => false],
                    ['text' => 'Rio de Janeiro', 'is_correct' => false],
                    ['text' => 'Salvador', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual país tem a maior população do mundo em 2025?',
                'options' => [
                    ['text' => 'Índia', 'is_correct' => true],
                    ['text' => 'China', 'is_correct' => false],
                    ['text' => 'Estados Unidos', 'is_correct' => false],
                    ['text' => 'Brasil', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Quem inventou a lâmpada elétrica?',
                'options' => [
                    ['text' => 'Thomas Edison', 'is_correct' => true],
                    ['text' => 'Nikola Tesla', 'is_correct' => false],
                    ['text' => 'Alexander Graham Bell', 'is_correct' => false],
                    ['text' => 'James Watt', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é o órgão responsável pela manutenção do DNA?',
                'options' => [
                    ['text' => 'Núcleo celular', 'is_correct' => true],
                    ['text' => 'Ribossomo', 'is_correct' => false],
                    ['text' => 'Mitocôndria', 'is_correct' => false],
                    ['text' => 'Lisossomo', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'O que significa IoT?',
                'options' => [
                    ['text' => 'Internet of Things', 'is_correct' => true],
                    ['text' => 'Information on Technology', 'is_correct' => false],
                    ['text' => 'Integration of Tools', 'is_correct' => false],
                    ['text' => 'Input of Technology', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a fórmula química da água?',
                'options' => [
                    ['text' => 'H2O', 'is_correct' => true],
                    ['text' => 'CO2', 'is_correct' => false],
                    ['text' => 'O2', 'is_correct' => false],
                    ['text' => 'NaCl', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é o maior oceano do planeta?',
                'options' => [
                    ['text' => 'Pacífico', 'is_correct' => true],
                    ['text' => 'Atlântico', 'is_correct' => false],
                    ['text' => 'Índico', 'is_correct' => false],
                    ['text' => 'Ártico', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Quem escreveu “Dom Quixote”?',
                'options' => [
                    ['text' => 'Miguel de Cervantes', 'is_correct' => true],
                    ['text' => 'William Shakespeare', 'is_correct' => false],
                    ['text' => 'Victor Hugo', 'is_correct' => false],
                    ['text' => 'Dante Alighieri', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é o maior mamífero terrestre?',
                'options' => [
                    ['text' => 'Elefante africano', 'is_correct' => true],
                    ['text' => 'Girafa', 'is_correct' => false],
                    ['text' => 'Hipopótamo', 'is_correct' => false],
                    ['text' => 'Rinoceronte', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual país sediou os Jogos Olímpicos de 2016?',
                'options' => [
                    ['text' => 'Brasil', 'is_correct' => true],
                    ['text' => 'China', 'is_correct' => false],
                    ['text' => 'Reino Unido', 'is_correct' => false],
                    ['text' => 'Rússia', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Quem é considerado o pai da computação?',
                'options' => [
                    ['text' => 'Alan Turing', 'is_correct' => true],
                    ['text' => 'Bill Gates', 'is_correct' => false],
                    ['text' => 'Steve Jobs', 'is_correct' => false],
                    ['text' => 'Tim Berners-Lee', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual destes elementos é um gás nobre?',
                'options' => [
                    ['text' => 'Neônio', 'is_correct' => true],
                    ['text' => 'Oxigênio', 'is_correct' => false],
                    ['text' => 'Nitrogênio', 'is_correct' => false],
                    ['text' => 'Hidrogênio', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a capital do Japão?',
                'options' => [
                    ['text' => 'Tóquio', 'is_correct' => true],
                    ['text' => 'Kyoto', 'is_correct' => false],
                    ['text' => 'Osaka', 'is_correct' => false],
                    ['text' => 'Nagoya', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual o maior deserto do mundo?',
                'options' => [
                    ['text' => 'Deserto do Saara', 'is_correct' => true],
                    ['text' => 'Gobi', 'is_correct' => false],
                    ['text' => 'Kalahari', 'is_correct' => false],
                    ['text' => 'Atacama', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a capital da França?',
                'options' => [
                    ['text' => 'Paris', 'is_correct' => true],
                    ['text' => 'Lyon', 'is_correct' => false],
                    ['text' => 'Marseille', 'is_correct' => false],
                    ['text' => 'Nice', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual animal é considerado o mais rápido do mundo?',
                'options' => [
                    ['text' => 'Guepardo', 'is_correct' => true],
                    ['text' => 'Leão', 'is_correct' => false],
                    ['text' => 'Águia', 'is_correct' => false],
                    ['text' => 'Cavalo', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a capital da Rússia?',
                'options' => [
                    ['text' => 'Moscou', 'is_correct' => true],
                    ['text' => 'São Petersburgo', 'is_correct' => false],
                    ['text' => 'Kazan', 'is_correct' => false],
                    ['text' => 'Novosibirsk', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual foi o primeiro satélite artificial lançado ao espaço?',
                'options' => [
                    ['text' => 'Sputnik 1', 'is_correct' => true],
                    ['text' => 'Apollo 11', 'is_correct' => false],
                    ['text' => 'Hubble', 'is_correct' => false],
                    ['text' => 'Challenger', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual linguagem é usada para estilizar páginas web?',
                'options' => [
                    ['text' => 'CSS', 'is_correct' => true],
                    ['text' => 'Python', 'is_correct' => false],
                    ['text' => 'Java', 'is_correct' => false],
                    ['text' => 'SQL', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual o primeiro presidente dos Estados Unidos?',
                'options' => [
                    ['text' => 'George Washington', 'is_correct' => true],
                    ['text' => 'Abraham Lincoln', 'is_correct' => false],
                    ['text' => 'Thomas Jefferson', 'is_correct' => false],
                    ['text' => 'John Adams', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual planeta é conhecido como planeta vermelho?',
                'options' => [
                    ['text' => 'Marte', 'is_correct' => true],
                    ['text' => 'Vênus', 'is_correct' => false],
                    ['text' => 'Júpiter', 'is_correct' => false],
                    ['text' => 'Saturno', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'O que é HTML?',
                'options' => [
                    ['text' => 'Linguagem de marcação', 'is_correct' => true],
                    ['text' => 'Linguagem de programação', 'is_correct' => false],
                    ['text' => 'Banco de dados', 'is_correct' => false],
                    ['text' => 'Framework', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Quem pintou a Mona Lisa?',
                'options' => [
                    ['text' => 'Leonardo da Vinci', 'is_correct' => true],
                    ['text' => 'Michelangelo', 'is_correct' => false],
                    ['text' => 'Pablo Picasso', 'is_correct' => false],
                    ['text' => 'Van Gogh', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual foi a primeira empresa a lançar um smartphone popular?',
                'options' => [
                    ['text' => 'Apple', 'is_correct' => true],
                    ['text' => 'Nokia', 'is_correct' => false],
                    ['text' => 'Samsung', 'is_correct' => false],
                    ['text' => 'Motorola', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é o maior rio do mundo?',
                'options' => [
                    ['text' => 'Nilo', 'is_correct' => true],
                    ['text' => 'Amazônia', 'is_correct' => false],
                    ['text' => 'Yangtzé', 'is_correct' => false],
                    ['text' => 'Mississipi', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual país é conhecido como a terra do sol nascente?',
                'options' => [
                    ['text' => 'Japão', 'is_correct' => true],
                    ['text' => 'China', 'is_correct' => false],
                    ['text' => 'Coreia do Sul', 'is_correct' => false],
                    ['text' => 'Tailândia', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a moeda oficial do Reino Unido?',
                'options' => [
                    ['text' => 'Libra esterlina', 'is_correct' => true],
                    ['text' => 'Euro', 'is_correct' => false],
                    ['text' => 'Dólar', 'is_correct' => false],
                    ['text' => 'Iene', 'is_correct' => false],
                ]
            ],
            [
                'text' => 'Qual é a linguagem usada para backend web mais popular atualmente?',
                'options' => [
                    ['text' => 'JavaScript (Node.js)', 'is_correct' => true],
                    ['text' => 'C++', 'is_correct' => false],
                    ['text' => 'Pascal', 'is_correct' => false],
                    ['text' => 'Fortran', 'is_correct' => false],
                ]
            ],
        ];

        foreach ($questions as $q) {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'text' => $q['text'],
            ]);

            foreach ($q['options'] as $o) {
                Option::create([
                    'question_id' => $question->id,
                    'text' => $o['text'],
                    'is_correct' => $o['is_correct'],
                ]);
            }
        }
    }
}
