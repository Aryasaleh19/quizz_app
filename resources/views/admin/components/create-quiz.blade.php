{{-- <form> --}}


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
                    <button id="closePopup" class="inline-flex text-white transition ease-in-out duration-150">
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


<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
        <input type="text" id="title" name="title"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Masukan Nama Quiz" required />
    </div>
    <div>
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
        <input type="text" id="deskripsi" name="deskripsi"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Masukan Deskripsi" required />
    </div>
    <div>

        <div class="w-full mx-auto flex  gap-4">
            <div class="w-1/2">
                <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                    time:</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="time" step="2" id="start-time"
                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        min="09:00" max="18:00" value="00:00" required />
                </div>
            </div>
            <div class="w-1/2">
                <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                    time:</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input step="2" type="time" id="end-time"
                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        min="09:00" max="18:00" value="00:00" required />
                </div>
            </div>
        </div>

    </div>

    <div>
        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Soal
        </label>
        <input type="number" id="visitors"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required />
    </div>
</div>
{{-- <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="john.doe@company.com" required />
    </div> --}}



<div class="mb-6" id="soal">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Soal</label>
    <textarea type="text" id=""
        class="bg-gray-50 border h-auto border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="john.doe@company.com" required></textarea>
</div>



<button id="submitSoal"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
{{-- </form> --}}

<script>
    $(document).ready(function() {



        const huruf = ['Z', 'A', 'B', 'C', 'D', 'E', 'F', 'G'];

        function getBodyInput(count) {
            $('#soal').empty();
            for (let i = 1; i <= count; i++) {
                $('#soal').append(
                    `<div class="mb-6 flex flex-wrap gap-4" id="getSoal-${i}">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Soal ${i}</label>
                <textarea type="text" id="soal-${i}"
                    class="bg-gray-50 border h-auto border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukan pertanyaan" required></textarea>
                <ul class="flex flex-row gap-10 mx-auto">
                    <li>
                        <input type="radio" id="pilihan-1-${i}" name="pilihanJawaban-${i}" value="pilihan-1" class="hidden peer" required />
                        <label for="pilihan-1-${i}"
                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <input type="text" id="jawaban-1-${i}" placeholder="Masukan jawaban" class="w-full h-full text-lg font-semibold border-0 rounded-lg">
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="pilihan-2-${i}" name="pilihanJawaban-${i}" value="pilihan-2" class="hidden peer">
                        <label for="pilihan-2-${i}"
                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <input type="text" id="jawaban-2-${i}" placeholder="Masukan jawaban" class="w-full h-full text-lg font-semibold border-0 rounded-lg">
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="pilihan-3-${i}" name="pilihanJawaban-${i}" value="pilihan-3" class="hidden peer">
                        <label for="pilihan-3-${i}"
                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <input type="text" id="jawaban-3-${i}" placeholder="Masukan jawaban" class="w-full h-full text-lg font-semibold border-0 rounded-lg">
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="pilihan-4-${i}" name="pilihanJawaban-${i}" value="pilihan-4" class="hidden peer">
                        <label for="pilihan-4-${i}"
                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                            <div class="block">
                                <input id="jawaban-4-${i}" type="text" placeholder="Masukan jawaban" class="w-full h-full text-lg font-semibold border-0 rounded-lg">
                            </div>
                        </label>
                    </li>
                </ul>
            </div>`
                );
            }
        }


        getBodyInput(1);

        $('#visitors').on('input', function() {

            const count = $(this).val();
            console.log(count);
            getBodyInput(count);
        });


        $('#submitSoal').on('click', function(e) {
            e.preventDefault();
            $submitted = $('#submitSoal');
            $submitted.prop('disabled', true);
            $submitted.addClass('opacity-50 cursor-not-allowed');
            $submitted.html('processing...');

            var count = $('#visitors').val();
            var title = $('#title').val();
            var deskripsi = $('#deskripsi').val();
            var today = new Date();
            var start = $('#start-time').val();
            var end = $('#end-time').val();

            var startTime = '00:' + start;
            var endTime = '00:' + end;

            // Memformat tanggal dan waktu
            // var formattedStartTime = new Date(today.getFullYear(), today.getMonth(), today.getDate(),
            //     ...startTime.split(':')).toISOString();
            // var formattedEndTime = new Date(today.getFullYear(), today.getMonth(), today.getDate(), ...
            //     endTime.split(':')).toISOString();

            var questions = [];

            for (let i = 1; i <= count; i++) {
                var soal = $('#soal-' + i).val();
                var pilihan1 = $('#jawaban-1-' + i).val();
                var pilihan2 = $('#jawaban-2-' + i).val();
                var pilihan3 = $('#jawaban-3-' + i).val();
                var pilihan4 = $('#jawaban-4-' + i).val();
                var jawaban = $('input[name="pilihanJawaban-' + i + '"]:checked').val();

                questions.push({
                    text: soal,
                    options: [pilihan1, pilihan2, pilihan3, pilihan4],
                    correct_option: jawaban ? parseInt(jawaban.split('-')[1]) - 1 :
                        null // Mendapatkan index pilihan yang benar
                });
            }

            // Mengirim data ke server menggunakan AJAX
            $.ajax({
                url: '/create-quiz',
                type: 'POST',
                data: {
                    title: title,
                    deskripsi: deskripsi,
                    start_time: start,
                    end_time: end,
                    questions: questions,
                    _token: '{{ csrf_token() }}' // Token CSRF
                },
                success: function(response) {
                    $('#popup-success').removeClass('hidden');
                    $submitted.prop('desabled', false);
                    $submitted.removeClass('opacity-50 cursor-not-allowed');
                    $submitted.html('Submit');
                    // Menampilkan pesan sukses
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        // Menampilkan pesan error
                        Object.keys(errors).forEach(function(key) {
                            alert(errors[key][
                                0
                            ]); // Menampilkan error pertama dari setiap field
                        });
                    }

                    $submitted.prop('disabled', false);
                    $submitted.removeClass('opacity-50 cursor-not-allowed');
                    $submitted.html('Submit');
                }
            });
        });


        $('#closePopup').click(function() {
            $('#popup-success').addClass('hidden');
        })



    });
</script>
