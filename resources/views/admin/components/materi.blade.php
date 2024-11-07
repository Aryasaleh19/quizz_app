<div id="preload" class="flex items-center justify-center h-screen">
    <div class="relative">
        <div class="h-24 w-24 rounded-full border-t-8 border-b-8 border-gray-200"></div>
        <div class="absolute top-0 left-0 h-24 w-24 rounded-full border-t-8 border-b-8 border-blue-500 animate-spin">
        </div>
    </div>
</div>
<div id="mainContent" class="hidden card w-full flex flex-wrap py-6" id="quiz">
    <h1 class="mx-6 font-semibold w-full text-3xl">Halaman Materi</h1>
    <div class="flex mx-auto w-full flex-wrap py-6">


        <div id="materi-view" class="relative w-full overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Body
                        </th>
                        <th scope="col" class="px-6 py-3 lg:w-20">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="materi-list">

                    @foreach ($materi as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" id="title-{{ $item->id }}"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            </th>
                            <td id="body-{{ $item->id }}" class="px-6 py-4 ">

                            </td>
                            <td
                                class="text-green-500 text-center font-bold px-6 py-4 cursor-pointer hover:text-green-700">
                                Edit <span class="text-red-500 hover:text-red-700">Hapus</span>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr class="bg-white dark:bg-gray-800">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                    </tr> --}}

                </tbody>
            </table>
        </div>

    </div>
</div>
<a id="createMateri" class="cursor-pointer text-base inline-block font-semibold hover:bg-blue-700 btn mt-4 py-2.5">Buat
    Materi Baru</a>



<script>
    $(document).ready(function() {
        // Ambil daftar quiz dari server (ganti URL sesuai rute yang benar)
        $.ajax({
            url: '/api/get-materi-quiz', // Pastikan untuk membuat rute ini di Laravel
            method: 'GET',
            success: function(data) {
                if (data.data.length) {
                    $.each(data.data, function(index, item) {

                        $('#preload').hide(); // Hapus loading spinner
                        $('#mainContent').show();


                        $('#title-' + item.id).html(item.title);
                        $('#body-' + item.id).html(item.body);
                    });
                } else {

                    $('#preload').hide(); // Hapus loading spinner
                    $('#mainContent').show().html(
                        ' <div class="bg-red-400 border text-sm text-red-500 rounded-sm p-4" role="alert">' +
                        '<span class="font-bold">Danger</span> Anda Belum ' +
                        'Membuat Quiz. </div>'
                    )
                }

            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });

        $('#createMateri').on('click', function() {
            $('#main-content').load("{{ route('create.materi') }}");
        });
    });
</script>

<script src="/js/app.js"></script>
<script src="/libs/simplebar/dist/simplebar.min.js"></script>
<script src="/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="/libs/@preline/dropdown/index.js"></script>
<script src="/libs/@preline/overlay/index.js"></script>
<script src="/js/sidebarmenu.js"></script>

</body>

</html>
