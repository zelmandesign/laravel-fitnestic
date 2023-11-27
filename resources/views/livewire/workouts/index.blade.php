<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if(count($workouts) > 0)
            @foreach($workouts as $workout)
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
                        <x-nav-link :href="route('workouts.show', ['workout' => $workout->id ])" :active="request()->routeIs('dashboard')" class="px-4 py-2 rounded-md bg-gray-200 text-gray-800 dark:bg-gray-800 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-700 transition-colors duration-300 mt-4" wire:navigate>
                            {{ __('View Workout') }}
                        </x-nav-link>
                        <a href="{{ route('workouts.show', ['workout' => $workout->id ]) }}" class="px-4 py-2 rounded-md bg-gray-200 text-gray-800 dark:bg-gray-800 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-700 transition-colors duration-300 mt-4">
                            View Workout
                        </a>
                        @if( $page == 'dashboard' )
                            <x-nav-link :href="route('workouts.edit', ['workout' => $workout->id ])" :active="request()->routeIs('dashboard')" class="px-4 py-2 rounded-md bg-gray-200 text-gray-800 dark:bg-gray-800 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-700 transition-colors duration-300 mt-4" wire:navigate>
                                {{ __('Edit Workout') }}
                            </x-nav-link>

                            <x-nav-link :href="route('workouts.show', ['workout' => $workout->id ])" :active="request()->routeIs('dashboard')" class="px-4 py-2 rounded-md bg-gray-200 text-gray-800 dark:bg-gray-800 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-700 transition-colors duration-300 mt-4" wire:navigate>
                                {{ __('VDelete Workout') }}
                            </x-nav-link>
                        @endif
                    </div>
                </div>
            @endforeach
            {{ $workouts->links(data: ['scrollTo' => false]) }}
        @else
            <p class="py-12">No workouts found!</p>
        @endif
    </div>
</div>
