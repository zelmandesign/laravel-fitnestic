
<x-app-layout>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-5" wire:key="{{ $workout->id }}">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p>Name: {{ $workout->name }}</p>
                        <p>Category: {{ $workout->category }}</p>
                        <p>Tags: {{ $workout->tags }}</p>
                        @if ($workout->user)
                            <p>Created by: {{ $workout->user->name }}</p>
                        @else
                            <p>Created by: User not found</p>
                        @endif
                        <p>{{ $workout->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


