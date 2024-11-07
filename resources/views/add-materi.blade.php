@extends('layouts.header')

@section('container')
    <div id="main-content" class=" hidden flex-wrap">
        <form class="w-11/12 flex mx-auto" method="POST" action="/add-materi" id="addMateri">
            <div class="w-full mx-auto flex flex-col gap-4">
                @csrf
                <input id="user_id" type="text" hidden name="user_id" value="{{ Auth::user()->id }}">

                <input id="title" type="text" placeholder="Nama Mapel"
                    class="w-full placeholder:text-center placeholder:font-bold placeholder:text-white placeholder:mx-4 rounded-xl bg-primary2 border-0 h-16 text-2xl text-white text-bold"
                    name="title">

                <textarea id="body" type="textarea" placeholder="Nama Mapel"
                    class="w-full placeholder:text-center placeholder:font-bold placeholder:text-white placeholder:mx-4 rounded-xl bg-primary2 border-0  text-2xl text-white text-bold"
                    name="body"></textarea>

                <button id="addMateri" type="submit" name="submit"
                    class="w-full h-16 rounded-xl bg-primary2 hover:bg-coklatTua text-2xl font-bold text-white">Simpan</button>
            </div>
        </form>
    </div>

    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center hidden justify-center" id="popupoverlay"></div>
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
                url: '/tambah-materi',
                method: 'get',
                success: function() {
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden').addClass('flex');
                }
            });
        });

        $(document).ready(function() {
            $('#addMateri').on('submit', function(event) {
                event.preventDefault(); // Mencegah form dikirim secara default
                var title = $('#title').val();
                var body = $('#body').val();
                var user_id = $('#user_id').val();

                $.ajax({
                    url: '/add-materi',
                    method: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        title: title,
                        body: body,
                        user_id: user_id // Tambahkan koma di sini
                    },
                    success: function(response) {
                        $('#popupContent').text(
                            'Selamat, Anda telah berhasil menambahkan materi.');
                        $('#popupMessage').removeClass('hidden');
                        $('#popupoverlay').removeClass('hidden');
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText);
                    }
                });
            });

            $('#closePopup').on('click', function() {
                $('#popupMessage').addClass('hidden');
                $('#popupoverlay').addClass('hidden');
                window.location.href = '/edit-materi';
            });
        });
    </script>
@endsection
