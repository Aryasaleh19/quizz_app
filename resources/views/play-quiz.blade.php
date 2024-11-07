<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-primary1 text-white font-sans">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <span class="text-3xl font-bold">Quiz App</span>
                <span class="ml-4 text-sm">Score: 0</span>
            </div>
            <div>
                <span class="text-sm">Level 1/20</span>
            </div>
        </div>
        @foreach ($quiz as $item)
            <div class="bg-primary2 rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-2">{{ $quiz->title }}</h2>
                <h2 class="text-2xl font-bold mb-2">{{ $quiz->description }}</h2>
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <button
                        class="bg-coklatTua hover:bg-[#FFEEAD] text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-coklatTuabg-coklatTua transition duration-300">No</button>
                    <button
                        class="bg-coklatTua hover:bg-[#FFEEAD] text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FFAD60] transition duration-300">Yes</button>
                </div>
            </div>
        @endforeach

    </div>
