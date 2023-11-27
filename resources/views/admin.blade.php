<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ show:true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("flash message here") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-6" x-data="{ show:true }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>user permissions</p>
                    @can('access admin panel')
                       <p>boban</p>
                    @endcan
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
