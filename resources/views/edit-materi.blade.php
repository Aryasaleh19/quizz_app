@extends('layouts.header')

@section('container')
    <!-- Main modal -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true" id="confrmDelete"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <button type="button"
                    class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                <div class="flex justify-center items-center space-x-4">
                    <button data-modal-toggle="deleteModal" type="button"
                        class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        No, cancel
                    </button>

                    <button type="submit" id="delete"
                        class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Yes, I'm sure
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pt-4 hidden" id="main-content">
        <h1 class="text-6xl text-center text-coklatTua font-bold">{{ $title }}</h1>
    </div>
    <div class="flex flex-wrap pt-10">
        <div class="w-11/12 mx-auto">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right border border-coklatTua text-white ">
                    <thead class="text-xs text-primary1 uppercase bg-coklatTua  ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Materi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>

                        </tr>
                    </thead>
                    <tbody id="materi-list" class="hidden">

                        @foreach ($materi as $materi)
                            <tr id="materi-list{{ $materi->id }}" class="bg-primary2 border-b border-coklatTua">
                                <th id="title" scope="row"
                                    class="px-6 py-4 font-medium text-white whitespace-nowrap ">
                                    {{ $materi->title }}
                                </th>
                                <td id="body" class="px-6 py-4">
                                    {{ $materi->body }}
                                </td>

                                <td class="px-6 py-4 max-w-10">

                                    <button type="submit" id="deleteButton" data-id="{{ $materi->id }}" class="inline"
                                        name="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="self-center mx-auto w-6 h-6 hover:text-primary2  "
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path class="fill-coklatTua"
                                                d=" M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            64C39.4 64 0 103.4 0 152L0 424c0 48.6 39.4 88 88 88l272 0c48.6 0 88-39.4
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            88-88l0-112c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 112c0 22.1-17.9 40-40 40L88
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            464c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l112 0c13.3 0 24-10.7
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            24-24s-10.7-24-24-24L88 64z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="w-full flex">
        <div class="w-11/12 mx-auto ">
            <div class=" w-full grid justify-items-end  ">
                <a href="/tambah-materi">

                    <svg xmlns="http://www.w3.org/2000/svg" class="elf-center mx-auto w-12 h-12 hover:text-primary2"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#a66e38"
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                    </svg>
                </a>

            </div>
        </div>

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
                url: '/materi/data',
                method: 'GET',

                success: function(data) {
                    $('#loader').remove();
                    $('#main-content').removeClass('hidden');
                    if (data.length) {
                        $('#materi-list').removeClass('hidden');

                    } else {
                        $('#materi-list').append(
                            '<p class="text-center text-red-500">Tidak ada materi yang tersedia.</p>'
                        );
                    }
                }
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            // Event delegation for dynamically loaded content
            $(document).on('click', '#deleteButton', function(event) {
                $('#deleteModal').removeClass('hidden');
                let getId = $(this).data('id');

                $(document).on('click', '#deleteModal', function(event) {
                    $('#deleteModal').addClass('hidden');
                    $.ajax({
                        url: '/delete-materi/' + getId, // Use the ID in the URL
                        method: 'post',
                        data: {
                            _token: '{{ csrf_token() }}', // Send the CSRF token
                            method: 'post'
                        },
                        success: function(response) {
                            // Show success message or remove the deleted row
                            $('#popupContent').text(
                                'Materi has been successfully deleted.');
                            $('#popupMessage').removeClass('hidden');
                            $('#popupoverlay').removeClass('hidden');
                            $('#materi-list' + getId).remove();

                            // // Optionally, remove the deleted item from the list
                            // $('tr[data-id="' + getId + '"]').remove();
                        },
                        error: function(xhr) {
                            alert('An error occurred: ' + xhr.responseText);
                        }
                    });
                });
            });

            // Close popup when user clicks the "Close" button
            $('#closePopup').on('click', function() {
                $('#popupMessage').addClass('hidden');
                $('#popupoverlay').addClass('hidden');



            });
        });
    </script>




    {{-- <script>
        $(document).ready(function() {
            getIdDelete = null;

            $('#deleteButton').click(function() {
                getIdDelete = $(this).data('id');
                $('#deleteModal').removeClass('hidden');
                console.log(getIdDelete);
            });

            $('#delete').click(function() {
                $.ajax({
                    url: '/delete/' + getIdDelete,
                    method: 'GET',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        $('#deleteModal').addClass('hidden');

                    }
                });

            });

        });
    </script> --}}
@endsection
