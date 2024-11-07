<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr class="bg-coklatTua">
                <th scope="col" class="px-6 py-3 text-center  ">
                    Nama
                </th>
                <th scope="col" class="max-w-2 py-3">
                    Skor
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
                <tr>
                    <th scope="row"
                        class="px-6 py-4 text-center  font-medium text-gray-900 whitespace-nowrap  dark:text-white ">
                        {{ $item->user->name }}
                    </th>
                    <th scope="row"
                        class="px-6 w-2 py-4 font-medium text-gray-900 whitespace-nowrap  dark:text-white ">
                        {{ $item->score }}
                    </th>
                </tr>
                <tr>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
