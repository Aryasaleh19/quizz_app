<div class="hidden" id="audio"></div>
<div id="mainContent" class="hidden w-full flex flex-col gap-10 mx-auto p-4">
    <div class="flex justify-between items-center mb-8">
        <div class="flex items-center text-coklatTua">
            <span class="text-3xl font-bold">{{ $quiz->title }}</span>
            <span id="score-display" class="ml-4 text-sm">Score: 0</span>
        </div>
        <div>
            <span id="level-display" class="text-sm">Level 1/{{ count($data) }}</span>
        </div>
    </div>
    @php
        $i = 1;
    @endphp
    @foreach ($data as $item)
        <div id="question-{{ $i }}"
            class="bg-primary2 rounded-lg p-6 shadow-md flex flex-col gap-4 {{ $i > 1 ? 'hidden' : '' }}">
            <h2 id="quiz-title" class="text-2xl text-white font-bold mb-2">{{ $i }}.
                {{ $item->question_text }}</h2>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div id="successAnimation" class="absolute w-full">
                    <div class="flex self-center">
                        {{-- <video autoplay>
                            <source src="{{ asset('/Videos/success animation.mp4') }}">
                        </video> --}}
                    </div>
                </div>
                @foreach ($item->choices as $choice)
                    <button id="option-{{ $choice->question_id }}-{{ $choice->is_correct }}"
                        data-question="{{ $i }}" value="{{ $choice->is_correct }}"
                        name="jawaban-{{ $choice->question_id }}"
                        class="answer-btn bg-coklatTua hover:bg-[#FFEEAD] text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-coklatTuabg-coklatTua transition duration-300">
                        {{ $choice->text }}
                    </button>
                @endforeach
            </div>
        </div>
        @php
            $i++;
        @endphp
    @endforeach

    <!-- Result Section -->
    <div id="quiz-complete" class="hidden bg-primary2 rounded-lg p-6 shadow-md text-center">
        <h2 class="text-2xl text-white font-bold mb-4">Kuis Selesai!</h2>
        <p class="text-white text-lg">Skor Akhir Anda: <span id="final-score">0</span></p>
        <button id="showResult" class="mt-4 bg-coklatTua hover:bg-[#FFEEAD] text-white font-bold py-3 px-6 rounded-lg">
            Finish 👏
        </button>
    </div>
</div>

<script>
    $(document).ready(function() {


        let currentQuestion = 1;
        let totalQuestions = {{ count($data) }};
        let score = 0;
        let answeredQuestions = new Set();
        // console.log(answeredQuestions);
        let user_id = {{ Auth::user()->id }};
        let quiz_id = {{ $quiz->id }};

        // Initial load
        $('#loader').show();
        $.ajax({
            url: '/api/get-quiz',
            type: 'get',
            success: function(data) {
                $('#loader').hide();
                $('#mainContent').removeClass('hidden');
                initializeQuiz();
            },
            error: function() {
                alert('Error loading quiz data');
            }
        });

        function initializeQuiz() {
            // Reset everything for new/restart quiz
            currentQuestion = 1;
            score = 0;
            answeredQuestions.clear();
            updateScore();
            updateLevel();

            // Hide all questions except first
            $('.answer-btn').removeClass('bg-green-500 bg-red-500').prop('disabled', false);
            $('[id^=question-]').addClass('hidden');
            $('#question-1').removeClass('hidden');
            $('#quiz-complete').addClass('hidden');
        }

        function updateScore() {
            $('#score-display').text('Score: ' + score);
            $('#final-score').text(score);

            $('.answer-btn').click(function(e) {
                e.preventDefault();
                var button = $(this).val();
                $.ajax({
                    url: '/api/update-score',
                    type: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        'score': score,
                        'user_id': user_id,
                        'quiz_id': quiz_id
                    },
                    success: function(data) {
                        if (button == 1) {



                            $('#audio').append(`
                        <audio autoplay controls>
                            <source src="{{ asset('audios/yay-6326.mp3') }}" type="audio/mpeg">
                        </audio>
                        `)
                        } else {

                            $('#audio').append(`
                        <audio autoplay controls>
                            <source src="{{ asset('audios/false.mp3') }}" type="audio/mpeg">
                        </audio>

                            `);
                        }

                        console.log('Score updated successfully');
                    }
                })
            });
        }

        function updateLevel() {
            $('#level-display').text('Level ' + currentQuestion + '/' + totalQuestions);
        }

        function moveToNextQuestion() {
            setTimeout(function() {
                if (currentQuestion < totalQuestions) {
                    $('#question-' + currentQuestion).addClass('hidden');
                    currentQuestion++;
                    $('#question-' + currentQuestion).removeClass('hidden');
                    updateLevel();
                } else {
                    // Quiz completed
                    $('[id^=question-]').addClass('hidden');
                    $('#quiz-complete').removeClass('hidden');
                }
            }, 3000); // Delay to show correct/incorrect answer
        }

        // Handle answer clicks
        $('.answer-btn').click(function(e) {
            e.preventDefault();
            const $button = $(this);
            const questionNum = $button.data('question');

            // Prevent multiple answers for the same question
            if (answeredQuestions.has(questionNum)) {
                return;
            }

            const isCorrect = $button.val() === "1";
            answeredQuestions.add(questionNum);

            // Disable all buttons for this question
            $(`#question-${questionNum} .answer-btn`).prop('disabled', true);

            if (isCorrect) {
                $button.addClass('bg-green-500');
                score += 10; // Or whatever scoring system you want
                updateScore();
            } else {
                $button.addClass('bg-red-500');
                // Optionally show correct answer
                $(`#question-${questionNum} .answer-btn[value="1"]`).addClass('bg-green-500');
            }

            moveToNextQuestion();
        });
        setTimeout(function() {
            moveToNextQuestion();

        }, 20000)

        // Restart quiz
        // $('#restart-quiz').click(function() {
        //     initializeQuiz();
        // });
        $('#showResult').click(function(e) {
            e.preventDefault();


            $.ajax({
                url: '/api/showResult',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    user_id: user_id,
                    quiz_id: quiz_id
                },
                success: function(response) {
                    $('#mainContent').load('/results')
                }
            })
        })
    });
</script>
