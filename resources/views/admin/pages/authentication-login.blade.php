@extends('admin.pages.header-auth')

@section('auth-container')
    <main id="mainContent" class="hidden">
        @if (session()->has('fail'))
            <div class="absolute z-[1000] grid justify-items-center  w-full top-24">
                <div id="alert-border-2"
                    class=" flex items-center p-4 mb-4 max-w-md w-full text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        <span class="font-bold">Error: </span>Email atau Password Salah.
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif
        <!-- Main Content -->
        <div
            class="flex flex-col w-full  overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">

            <div class="justify-center items-center w-full card lg:flex max-w-md ">
                <div class=" w-full card-body">
                    <a href="../" class="py-4 block"><img
                            src="{{ asset('images/logos/Logo-Tut-Wuri-Handayani-PNG-Warna-removebg-preview.png') }}"
                            alt="" class="mx-auto w-10 h-10" /></a>
                    <p class="mb-4 text-gray-400 text-sm text-center font-bold">QUIZ {{ $nama_sekolah }}</p>
                    <!-- form -->
                    <form method="POST" action="/login">
                        @csrf
                        <!-- username -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm mb-2 text-gray-400">Email</label>
                            <input type="email" id="email" name="email"
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                aria-describedby="hs-input-helper-text" required>
                        </div>
                        <!-- password -->
                        <div class="mb-6">
                            <label for="password" class="block text-sm  mb-2 text-gray-400">Password</label>
                            <input type="password" name="password" id="password"
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                aria-describedby="hs-input-helper-text" required>
                        </div>
                        <!-- checkbox -->
                        {{-- <div class="flex justify-between">
                            <div class="flex">
                                <input type="checkbox"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-[4px] text-blue-600 focus:ring-blue-500 "
                                    id="hs-default-checkbox" checked>
                                <label for="hs-default-checkbox" class="text-sm text-gray-500 ms-3">Remeber this
                                    Device</label>
                            </div>
                            <a href="../" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Forgot
                                Password ?</a>
                        </div> --}}
                        <!-- button -->
                        <div class="grid my-6">
                            <button type="submit"
                                class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign
                                In</button>
                        </div>

                        <div class="flex justify-center gap-2 items-center">
                            <p class="text-base font-semibold text-gray-400">Belum punya akun?</p>
                            <a href="{{ route('register') }}"
                                class="text-sm font-semibold text-blue-600 hover:text-blue-700">Buat Akun</a>
                        </div>
                </div>
                </form>
            </div>
        </div>

        </div>
        <!--end of project-->
    </main>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/login',
                method: 'get',
                beforeSend: function() {
                    $('#loader').show();
                },
                success: function() {
                    $('#loader').hide();
                    $('#mainContent').removeClass('hidden');
                }
            })


        });
    </script>
@endsection
