<x-app-layout title="Posts">
    @section('meta')
        <meta name="description" content="Discover a wide range of topics with our concise, clear articles. Quality information made simple and accessible for all.">
        <meta property="og:title" content="Browse our latest posts">
        <meta property="og:description" content="Discover a wide range of topics with our concise, clear articles. Quality information made simple and accessible for all.">
        <meta property="og:image" content="">
        <meta property="og:url" content="{{ route('posts.index') }}">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Browse our latest posts">
        <meta name="twitter:description" content="{Discover a wide range of topics with our concise, clear articles. Quality information made simple and accessible for all.">
        <meta name="twitter:image" content="">
    @endsection
    <div class="grid w-full grid-cols-4 gap-10">
        <div class="col-span-4 md:col-span-3">
            <livewire:post-list/>
        </div>
        <div id="side-bar"
             class="sticky top-0 h-screen col-span-4 px-3 py-6 pt-10 space-y-10 border-t border-gray-100 border-t-gray-100 md:border-t-none md:col-span-1 md:px-6 md:border-l">
            @include('posts.partials.search-box')

            @include('posts.partials.categories-box')
        </div>
    </div>

</x-app-layout>
