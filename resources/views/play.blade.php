@extends('layouts.header')

@section('container')
    <div id="alert" class="alert w"></div>
    <div class="main-quiz"></div>
    <div id="main-content" class="hidden flex flex-wrap h-screen ">
        <div class="flex flex-col self-center mx-auto flex-wrap gap-4 w-9/12">
            <h1 class="text-6xl mx-auto text-coklatTua font-bold">Masukan Token</h1>
            <input class="mx-auto rounded-xl placeholder:text-white bg-primary2 border-0 h-16 text-2xl text-white text-bold"
                type="number" id="token">
            <button class="hover:bg-coklatTua text-white font-bold bg-primary2 rounded-xl px-6 text-2xl mx-auto py-4"
                id="playQuiz" type="submit">Play</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $.ajax({
                url: '/play',
                method: 'get',
                success: function() {
                    $('#loader').remove();
                    // $('#success').load('/success');
                    $('#main-content').removeClass('hidden');
                }
            });

            $('#playQuiz').click(function(event) {
                event.preventDefault();

                // console.log(setTimeout(2000));
                var time = "{{ date('s') }}"
                console.log(time);
                var buttonQuiz = $('#playQuiz');
                buttonQuiz.prop('disabled', true);
                buttonQuiz
                    .addClass('cursor-not-allowed opacity-50');
                buttonQuiz.html('Proccess');

                var token = $('#token').val();
                $.ajax({
                    url: '/play-quiz',
                    type: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        token: token
                    },
                    success: function(response) {
                        $('#main-content').load("/mulai-quiz");
                        buttonQuiz.prop('disabled', false);
                        buttonQuiz.removeClass('cursor-not-allowed opacity-50');
                        buttonQuiz.html('Play');

                    },
                    error: function(response) {
                        buttonQuiz.prop('disabled', false);
                        buttonQuiz.removeClass('cursor-not-allowed opacity-50');
                        buttonQuiz.html('Play');
                        $('#alert').html(`<div id="alertError" class="bg-red-400  border text-sm text-red-500 rounded-sm p-4" role="alert">
                            <span class="font-bold">Danger</span> ` + response.responseText + `
                </div>`)
                        setTimeout(function() {
                            $('#alertError').hide();
                        }, 3000);
                    }
                });
            });
        });
    </script>
@endsection
