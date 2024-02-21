<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-6 text-gray-900 dark:text-white">
                    <form action="{{ route('menu.store') }}" method="POST">
                        <div class="my-2 flex flex-col">
                            <label for="date">Datum</label>
                            <input type="date" name="date" id="date" class="form-input dark:bg-gray-700">
                        </div>
                        <div class="my-2 flex flex-col">
                            <label for="main_course_id">Hlavne jedlo</label>
                            <input type="text" name="main_course_id" id="main_course_id" class="form-input dark:bg-gray-700">
                        </div>
                        <div class="my-2 flex flex-col">
                            <label for="soup_id">Polievka</label>
                            <input type="text" name="soup_id" id="soup_id" class="form-input dark:bg-gray-700">
                        </div>
                        <div class="my-2 flex flex-col">
                            <label for="side_dish_id">Priloha</label>
                            <input type="text" name="side_dish_id" id="side_dish_id" class="form-input dark:bg-gray-700">
                        </div>
                        <div class="my-2 flex flex-col">
                            <label for="salad_id">Salat</label>
                            <input type="text" name="salad_id" id="salad_id" class="form-input dark:bg-gray-700">
                        </div>
                        <div class="my-2 flex justify-end">
                            <button type="submit" class="rounded-full bg-red-700 px-4 py-2">Odoslať</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
