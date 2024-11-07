@extends('layouts.header')

@section('container')
    <div id="main-content" class="w-full flex flex-wrap hidden h-screen">
        <div class="self-center mx-auto flex gap-16  flex-row">
            <a href="/edit-materi" class="flex flex-col">
                <span class="w-32 h-32 bg-primary2 hover:bg-coklatTua rounded-full flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="self-center mx-auto w-20 h-20  text-primary1 fill-current"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                    </svg>

                </span>
                <h1 id="content" class="text-2xl font-bold text-coklatTua mx-auto">Materi</h1>
            </a>
            <a href="/edit-quiz" class="flex flex-col">
                <span class="w-32 h-32 bg-primary2 hover:bg-coklatTua rounded-full flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-primary1 fill-current self-center mx-auto"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M80 160c0-35.3 28.7-64 64-64l32 0c35.3 0 64 28.7 64 64l0 3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74l0 1.4c0 17.7 14.3 32 32 32s32-14.3 32-32l0-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7l0-3.6c0-70.7-57.3-128-128-128l-32 0C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                    </svg>

                </span>
                <h1 id="content" class="text-2xl font-bold text-coklatTua mx-auto">Edit Quiz</h1>
            </a>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#loader').show();
            $.ajax({
                url: '/settings',
                method: 'GET',
                success: function() {
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden');
                }
            });
        });
    </script>
@endsection
