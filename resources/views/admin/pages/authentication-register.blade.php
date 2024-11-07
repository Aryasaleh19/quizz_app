@extends('admin.pages.header-auth')

@section('auth-container')
    <main id="mainContent" class="hidden">
        <!-- Main Content -->
        <div
            class=" flex flex-col w-full  overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">

            <div class="justify-center items-center w-full card lg:flex max-w-md ">
                <div class=" w-full card-body">
                    <a href="../" class="py-4 block"><img
                            src="{{ asset('/images/logos/Logo-Tut-Wuri-Handayani-PNG-Warna-removebg-preview.png') }}"
                            alt="" class="mx-auto w-10 h-10" /></a>
                    <p class="mb-4 text-gray-400 text-sm text-center font-bold">QUIZ {{ $nama_sekolah }}</p>
                    <!-- form -->
                    <form action="{{ route('regist.post') }}" method="POST" id="registForm">
                        @csrf
                        <!-- username -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm  mb-2 text-gray-400">Name</label>
                            <input type="text" id="name"
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                aria-describedby="hs-input-helper-text">
                        </div>
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm  mb-2 text-gray-400">Email Address</label>
                            <input type="email" id="email"
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                aria-describedby="hs-input-helper-text">
                        </div>
                        <!-- Role -->
                        <div class="mb-4">

                            <label for="underline_select" class="sr-only text-gray-400">Role</label>
                            <select id="role" name="role"
                                class="block py-2.5 px-0 w-full text-sm text-gray-400 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Pilih Role</option>
                                <option value="guru">Guru</option>
                                <option value="siswa">Siswa</option>
                            </select>

                        </div>
                        <!-- password -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm  mb-2 text-gray-400">Password</label>
                            <input type="password" id="password"
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                aria-describedby="hs-input-helper-text">
                        </div>

                        <!-- button -->
                        <div class="grid my-6">
                            <button type="submit" id="regist"
                                class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign
                                Up</button>
                        </div>

                        <div class="flex justify-center gap-2 items-center">
                            <p class="text-base font-semibold text-gray-400">Sudah punya akun?</p>
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold text-blue-600 hover:text-blue-700">Sign In</a>
                        </div>
                </div>
                </form>
            </div>
        </div>

        </div>
        <!--end of project-->
    </main>

    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden" id="popupOverlay"></div>
    <div class="fixed inset-0 flex items-center justify-center hidden" id="popupMessage">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p id="popupContent" class="text-gray-700"></p>
            <button id="closePopup"
                class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Close</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'register',
                method: 'get',
                beforeSend: function() {
                    $('#loader').show();
                },
                success: function() {
                    $('#loader').hide();
                    $('#mainContent').removeClass('hidden');
                }
            })
            $('#registForm').on('submit', function(event) {
                event.preventDefault();

                // Disable the register button immediately after click
                var $registerBtn = $('#regist');
                $registerBtn.prop('disabled', true);
                $registerBtn.addClass('opacity-50 cursor-not-allowed');

                // Optionally change button text to show loading state
                $registerBtn.html('Processing...');

                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var role = $('#role').val();

                $.ajax({
                    url: '{{ route('regist.post') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        username: name,
                        email: email,
                        password: password,
                        role: role
                    },
                    success: function(response) {
                        $('#popupContent').text('selamat anda telah melakukan registrasi');
                        $('#popupMessage').removeClass('hidden');
                        $('#popupOverlay').removeClass('hidden');
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText);

                        // Re-enable the button on error
                        $registerBtn.prop('disabled', false);
                        $registerBtn.removeClass('opacity-50 cursor-not-allowed');
                        $registerBtn.html('Regist');
                    },
                    complete: function() {
                        // If you want to re-enable the button even after success
                        // Uncomment these lines:
                        // $registerBtn.prop('disabled', false);
                        // $registerBtn.removeClass('opacity-50 cursor-not-allowed');
                        // $registerBtn.html('Regist');
                    }
                });
            });

            $('#closePopup').on('click', function() {
                $('#popupMessage').addClass('hidden');
                $('#popupOverlay').addClass('hidden');
                window.location.href = "/login";
            });
        })
    </script>
@endsection
