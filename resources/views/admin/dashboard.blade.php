<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="/images/logos/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Core Css -->
    <link rel="stylesheet" href="/css/theme.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>


<main onload="bodyLoad()">

    <!--start the project-->
    <div id="main-wrapper" class="flex p-5 xl:pr-0">
        @include('admin.layouts.aside')
        <div class="w-full page-wrapper xl:px-6 px-0">
            <!-- Main Content -->
            <main class="h-full max-w-full">
                <div class="container full-container p-0 flex flex-col gap-6">
                    <!--  Header Start -->
                    @include('admin.layouts.header')
                    <!--  Header End -->



                    <div id="dashboard" class="card w-full flex flex-wrap py-6 ">

                        @if (session()->has('fail'))
                            <div class="w-full h-screen">{{ session('fail') }}</div>
                        @endif
                        <h1 class="mx-6 font-semibold w-full text-3xl">Dahsboard</h1>
                        <div class="flex mx-auto flex-wrap py-6">
                            <div class="mx-auto flex flex-wrap gap-4">
                                <div class="flex flex-col  gap-6">
                                    <div class="card">
                                        <div class="py-4 px-7">
                                            <p class="mt-1 text-xl font-bold">Quiz</p>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="text-lg font-medium text-gray-500">
                                                Latih pengetahuan siswa yuk
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-400">
                                            <div id="dataS">

                                            </div>
                                            With supporting text below as a natural lead-in to
                                            additional content.
                                            </p>
                                            <a id="dataQuizz"
                                                class="cursor-pointer text-base inline-block font-semibold hover:bg-blue-700 btn mt-4 py-2.5">Buat
                                                Quiz</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap  gap-6">
                                    <div id="materi" class="card">
                                        <div class="py-4 px-7">
                                            <p class="mt-1 text-xl font-bold">Materi</p>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="text-lg font-medium text-gray-500">
                                                Special title treatment
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-400">
                                                With supporting text below as a natural lead-in to
                                                additional content.
                                            </p>
                                            <a href="#"
                                                class="text-base inline-block font-semibold hover:bg-blue-700 btn mt-4 py-2.5">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="main-content">

                    </div>
                    {{-- main content --}}
                    {{-- end main content --}}
                    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">


                    </div>
                    <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 gap-6"></div>
                    <footer>
                        <p class="text-base text-gray-400 font-normal p-3 text-center">
                            Design and Developed by
                            <a href="https://www.wrappixel.com/" target="_blank"
                                class="text-blue-600 underline hover:text-blue-700">Arya Saleh</a>
                        </p>
                    </footer>
                </div>
            </main>
            <!-- Main Content End -->
        </div>
    </div>
    <!--end of project-->
</main>

<script>
    $(document).ready(function() {



        $("#getDashboard").on('click', function(e) {
            e.preventDefault();
            $('#dashboard').show();
            $('#main-content').hide();
            $('.sidebar-link').removeClass("active");
            $(this).addClass("active")
        });

        $("#getDataQuiz").on('click', function(e) {
            e.preventDefault();
            $('#main-content').load('quiz');
            $('#dashboard').hide();
            $('#main-content').show();
            $('.sidebar-link').removeClass("active");
            $(this).addClass("active");

        });
        $("#getMateri").add("#dataQuizz").on('click', function(e) {
            e.preventDefault();
            $('#main-content').load("{{ route('materi') }}");
            $('#dashboard').hide();
            $('#main-content').show();
            $('.sidebar-link').removeClass("active");
            $(this).addClass("active");


        });


    });
</script>


<script src="/js/app.js"></script>

<script src=/libs/simplebar/dist/simplebar.min.js></script>
<script src="/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="/libs/@preline/dropdown/index.js"></script>
<script src="/libs/@preline/overlay/index.js"></script>
<script src="/js/sidebarmenu.js"></script>

</body>

</html>
