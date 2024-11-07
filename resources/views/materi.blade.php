@extends('layouts.header')

@section('container')
    <div id="main-content" class="flex flex-wrap h-screen hidden">
        <div class="flex flex-col self-center mx-auto flex-wrap gap-4 w-9/12">
            <h1 class="text-6xl mx-auto text-coklatTua font-bold">Pilih Materi</h1>

            <div id="materi-list" class="flex flex-col gap-4">
                <!-- Daftar materi akan ditambahkan di sini -->
            </div>
        </div>
    </div>





    <script>
        $(document).ready(function() {
            $('#loader').show();
            $.ajax({
                url: '/materi/data', // Mengambil data dari route baru
                method: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden');
                    // Mengisi konten dengan data yang diterima
                    if (data.length) {
                        $.each(data, function(index, item) {
                            $('#materi-list').append(
                                '<a href="/materi/' + item.title +
                                '" class="hover:bg-coklatTua flex rounded-xl bg-primary2 text-white w-full h-16">' +
                                '<h1 class="mx-4 self-center text-center">' + item.title +
                                '</h1>' +
                                '</a>'
                            );
                        });
                    } else {
                        $('#materi-list').append(
                            '<p class="text-center text-red-500">Tidak ada materi yang tersedia.</p>'
                        );
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching materi: " + error);
                    $('#materi-list').append(
                        '<p class="text-center text-red-500">Terjadi kesalahan saat mengambil data materi.</p>'
                    );
                }
            });
        });
    </script>
@endsection
