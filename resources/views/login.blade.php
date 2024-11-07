@extends('layouts.header')

@section('container')
    @if (session()->has('success'))
        <div class="flex flex-wrap mt-12  relative">
            <div id="alert-1"
                class="flex mx-auto items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    anda barhasil melakukan registrasi
                    {{-- A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example
                        link</a>. Give it a click if you like. --}}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
    @endif
    @if (session()->has('fail'))
        <div class="flex flex-wrap mt-12  relative">
            <div id="alert-1"
                class="flex mx-auto items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example
                        link</a>. Give it a click if you like.
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
    @endif
    <div id="main-content" class="hidden w-full  h-screen flex-wrap ">

        <div class="self-center flex mx-auto flex-wrap w-9/12">

            <h1 class="text-6xl  font-bold mx-auto text-coklatTua pb-6">Quiz</h1>

            <form action="/login" method="post" class="w-full flex flex-wrap gap-6">
                @csrf
                <input type="email"
                    class="mx-auto rounded-xl placeholder:text-white bg-primary2 border-0 h-16 text-2xl text-white text-bold w-full"
                    placeholder="Email" name="email">
                <input type="password"
                    class="mx-auto rounded-xl placeholder:text-white bg-primary2 border-0 h-16 text-2xl text-white text-bold w-full"
                    placeholder="Password" name="password">
                <div class=" flex mx-auto gap-3 ">


                    <button type="submit"
                        class="hover:bg-coklatTua  text-white font-bold bg-primary2 rounded-xl px-6 text-2xl mx-auto py-4"
                        name="login">Login</button>
                    <a href="/register"
                        class="hover:bg-coklatTua text-white font-bold bg-primary2 rounded-xl px-6 text-2xl mx-auto py-4">SignUp</a>

                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/login',
                method: 'get',
                success: function() {
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden');
                    $('#main-content').addClass('flex');

                }
            });
        });
    </script>
@endsection
