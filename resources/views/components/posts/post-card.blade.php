@props(['post'])

<div {{ $attributes }}>
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
        <div>
            <img class="w-full md:h-40 lg:h-80 object-cover rounded-xl" src="{{ $post->getThumbnailUrl() ?? 'default.jpeg' }}" alt="{{$post->title}}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($category = $post->categories->first())
                <x-posts.category-badge :category="$category" />
            @endif
            <p class="text-sm text-gray-500">{{ $post->published_at }}</p>
        </div>
        <h1>
            <a wire:navigate href="{{ route('posts.show', $post->slug) }}"
               class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
        </h1>
    </div>
</div>
