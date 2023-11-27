@if(session('message'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div id="flash-message" class="alert alert-success bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-5" role="alert" x-data="{ show:true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <p>{{ session('message') }}</p>
        </div>
    </div>
    </div>
@endif
