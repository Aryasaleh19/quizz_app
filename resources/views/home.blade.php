@extends('layouts.header')

@section('container')
    @if (session()->has('fail'))
        <div class="flex">
            <div class="mx-auto bg-red-400 border text-sm text-red-500 rounded-sm p-4" role="alert">
                <span class="font-bold">Danger</span> alert! You should check in on some of
                those fields below.
            </div>
        </div>
    @endif
    <div id="main-content" class=" w-full h-screen flex hidden">
        <div class="self-center flex flex-wrap gap-16 mx-auto">
            <a href="/materi" class="flex flex-col">
                <span class="w-32 h-32 bg-primary2 hover:bg-coklatTua rounded-full flex">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="self-center mx-auto w-20 h-20  text-primary1 fill-current" viewBox="0 0 448 512">
                        <path
                            d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                    </svg>
                </span>
                <h1 class="text-2xl font-bold text-coklatTua mx-auto">Materi</h1>
            </a>

            <a href="/play" class="flex flex-col">
                <span class="w-32 h-32 bg-primary2 hover:bg-coklatTua rounded-full flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="self-center mx-auto w-20 h-20 text-primary1 fill-current"
                        viewBox="0 0 384 512">
                        <path
                            d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                </span>
                <h1 id="play" class="text-2xl font-bold text-coklatTua mx-auto">Play</h1>
            </a>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#loader').show();
            $.ajax({
                url: '/',
                method: 'GET',
                success: function() {
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden');
                }
            });
        });
    </script>
@endsection
