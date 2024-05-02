<div class="w-full min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <h1 class="text-2xl md:text-4xl mb-8">
        {{ $title }}
    </h1>
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
