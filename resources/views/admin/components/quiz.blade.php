<div id="preload" class="flex items-center justify-center h-screen">
    <div class="relative">
        <div class="h-24 w-24 rounded-full border-t-8 border-b-8 border-gray-200"></div>
        <div class="absolute top-0 left-0 h-24 w-24 rounded-full border-t-8 border-b-8 border-blue-500 animate-spin">
        </div>
    </div>
</div>

<div id="popup-success" class="hidden fixed inset-x-0 top-0 flex items-end justify-right px-4 py-6 justify-end">
    <div
        class="max-w-sm w-full shadow-lg rounded px-4 py-3 rounded relative bg-green-400 border-l-4 border-green-700 text-white">
        <div class="p-2">
            <div class="flex items-start">
                <div class="ml-3 w-0 flex-1 pt-0.5">
                    <p class="text-sm leading-5 font-medium">
                        Success
                    </p>
                </div>
                <div class="ml-4 flex-shrink-0 flex">
                    <button class="inline-flex text-white transition ease-in-out duration-150" id="closePopup">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="popup">




    <!-- Main modal -->
    <div id="select-modal"
        class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative mx-auto p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Open positions
                    </h3>
                    <button onclick="closeModal()" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="select-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <p class="text-gray-500 dark:text-gray-400 mb-4">Pilih Opsi Quiz:</p>
                    <ul class="space-y-4 mb-4">
                        <li>
                            <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer"
                                required />
                            <label for="job-1" onclick="" id="modalOne"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Pilihan Ganda</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                            <label for="job-2"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Essay</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>

</div>
<div id="mainContent" class="hidden card w-full flex flex-wrap py-6" id="quiz">
    <h1 class="mx-6 font-semibold w-full text-3xl">Halaman Quiz</h1>
    <div class="flex mx-auto w-full flex-wrap py-6">


        <div class="relative w-full overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Token
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="materi-list">

                    @foreach ($quiz as $item)
                        <tr id="table-{{ $item->id }}"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" id="data-{{ $item->id }}"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            </th>
                            <td id="description-{{ $item->id }}" class="px-6 py-4">

                            </td>
                            <td id="status-{{ $item->id }}" class="px-6 py-4">
                            </td>

                            <td class="px-6 py-4" id="token-{{ $item->id }}">
                            </td>
                            <td class="px-6 py-4"><span id="delete-{{ $item->id }}"
                                    class="cursor-pointer text-red-700 hover:text-red-500 font-bold">Hapus</span> |
                                <span id="edit-{{ $item->id }}">Edit</span>
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

<a id="createQuiz" class="cursor-pointer text-base inline-block font-semibold hover:bg-blue-700 btn mt-4 py-2.5">Buat
    Quiz Baru</a>


<script>
    $('#modalOne').click(function(e) {
        e.preventDefault();
        $('#main-content').load("{{ route('create.quiz') }}");

    })

    function closeModal() {
        $('#select-modal').hide();
    }
    $(document).ready(function() {
        $.ajax({
            url: '/api/get-quiz-list',
            method: 'GET',
            success: function(data) {
                if (data.data.length) {
                    $.each(data.data, function(index, item) {

                        $('#preload').hide();
                        $('#mainContent').show();
                        $id = '#data-' + item.id;


                        $($id).html(item.title);
                        $('#description-' + item.id).html(item.description);
                        $('#status-' + item.id).html(item.status);
                        $('#token-' + item.id).html(item.token);


                        $('#delete-' + item.id).click(function() {
                            var delete_id = item.id;
                            $('#popup-success').removeClass('hidden');
                            $.ajax({
                                url: '/api/delete-quiz',
                                method: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    id: delete_id
                                },
                                success: function(response) {
                                    $('#table-' + delete_id).remove();
                                },
                                error: function(xhr, status, error) {
                                    console.error("Error:", error);
                                }
                            });
                        });

                    });
                } else {
                    $('#preload').hide();
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
        $('#createQuiz').on('click', function() {
            $('#select-modal').show();
        });

        $('#closePopup').click(function() {
            $('#popup-success').addClass('hidden');
        })



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
