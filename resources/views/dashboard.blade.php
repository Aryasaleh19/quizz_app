@extends('layouts.header')


<!-- Navbar -->
<nav class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-semibold">Dashboard Guru</h1>
        <ul class="flex space-x-4">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Create Quiz</a></li>
            <li><a href="#" class="hover:underline">Active Quizzes</a></li>
            <li><a href="#" class="hover:underline">Results</a></li>
        </ul>
    </div>
</nav>

<!-- Main Content -->
<div class="container mx-auto mt-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Create New Quiz -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Create New Quiz</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Quiz Title</label>
                    <input type="text" id="title" name="title"
                        class="w-full p-2 mt-2 border border-gray-300 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea id="description" name="description" class="w-full p-2 mt-2 border border-gray-300 rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="start_time" class="block text-gray-700">Start Time</label>
                    <input type="datetime-local" id="start_time" name="start_time"
                        class="w-full p-2 mt-2 border border-gray-300 rounded-lg">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Create
                    Quiz</button>
            </form>
        </div>

        <!-- Active Quizzes -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Active Quizzes</h2>
            <ul class="space-y-4">
                <li class="bg-gray-50 p-4 rounded-lg flex justify-between items-center">
                    <span>Quiz Title 1</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Start</button>
                </li>
                <li class="bg-gray-50 p-4 rounded-lg flex justify-between items-center">
                    <span>Quiz Title 2</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Start</button>
                </li>
                <li class="bg-gray-50 p-4 rounded-lg flex justify-between items-center">
                    <span>Quiz Title 3</span>
                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Start</button>
                </li>
            </ul>
        </div>

    </div>
</div>
