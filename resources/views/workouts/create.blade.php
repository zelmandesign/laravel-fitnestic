<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <form action="{{ route('workouts.store') }}" method="POST" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-5">
            @csrf <!-- CSRF protection for Laravel -->

            <div class="p-6 text-gray-900 dark:text-gray-100">

                <header class="mb-10">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        Create new Workout
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        Fill up form to create a new workout
                    </p>
                </header>

                <div class="mb-5">
                    <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Name</label>
                    <input type="text" name="name" id="name" class="w-full lg:w-1/2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block" required>
                </div>

                <div class="mb-5">
                    <label for="category" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Category</label>
                    <input type="text" name="category" id="category" class="w-full lg:w-1/2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block" required>
                </div>

                <div class="mb-5">
                    <label for="tags" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Tags</label>
                    <input type="text" name="tags" id="tags" class="w-full lg:w-1/2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block" required>
                </div>

{{--                <div class="mb-5">--}}
{{--                    <label for="author" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Author</label>--}}
{{--                    <input type="text" name="author" id="author" class="w-full lg:w-1/2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block" required>--}}
{{--                </div>--}}

                <div class="mb-5">
                    <label for="description" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full lg:w-1/2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block" required></textarea>
                </div>

                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
