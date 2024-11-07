@extends('layouts.header')

@section('container')
    <div id="main-content" class="w-full h-screen flex-wrap hidden">
        <div class="self-center flex mx-auto flex-wrap w-9/12">
            <h1 class="text-6xl  font-bold mx-auto text-coklatTua pb-6">Quiz</h1>
            <form action="{{ route('regist.post') }}" method="POST" id="registForm" class="w-full flex flex-wrap gap-6">
                @csrf
                <input type="text" id="name"
                    class="mx-auto rounded-xl bg-primary2 border-0 h-16 text-2xl text-white text-bold w-full"
                    placeholder="Username" name="username">
                <input type="email" id="email"
                    class="mx-auto rounded-xl bg-primary2 border-0 h-16 text-2xl text-white text-bold w-full"
                    placeholder="Email" name="email">
                <select name="role" id="role"
                    class="mx-auto rounded-xl bg-primary2 border-0 h-16 text-2xl text-white text-bold w-full">
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
                <input type="password" id="password"
                    class="mx-auto rounded-xl bg-primary2 border-0 h-16 text-2xl text-white text-bold w-full"
                    placeholder="Password" name="password">
                <div class="flex mx-auto gap-3">
                    <button type="submit"
                        class="hover:bg-coklatTua text-white font-bold bg-primary2 rounded-xl px-6 text-2xl mx-auto py-4"
                        id="regist" name="register">Regist</button>
                </div>
            </form>
        </div>
    </div>
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
                url: '/register',
                method: 'get',
                success: function() {
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden');
                    $('#main-content').addClass('flex');

                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
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
        });
    </script>
@endsection
