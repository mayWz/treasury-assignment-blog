<div>
    <div class="grid gap-6 px-8 lg:grid-cols-2 lg:gap-8">
        @if ($posts)
            @foreach ($posts as $post)
                <a href="{{ route('post.show', $post) }}" class="max-w-4xl py-6 bg-white rounded-lg shadow-md">
                    <div class="p-4">
                        <div class="flex items-center text-sm/relaxed text-left">
                            <img class="size-6 rounded-full object-cover" src="{{ $post->author->profile_photo_url }}"
                                alt="{{ $post->author->name }}" />
                            <span class="ml-2">{{ $post->author->name }}</span>
                        </div>
                        <h2 class="text-xl font-semibold text-black">
                            {{ $post->title }}
                        </h2>
                        <p class="mt-4 text-sm/relaxed">
                            {{ Str::limit($post->content, 100) }}
                        </p>
                        <p class="mt-6 text-sm/relaxed text-left">
                            {{ \Carbon\Carbon::parse($post->created_at)->format('D d M, Y') }}
                        </p>
                    </div>
                </a>
            @endforeach
        @else
            <div class="max-w-4xl py-6 mx-auto bg-white rounded-lg shadow-md">
                <div class="p-4">
                    {{ __('No blog post') }}
                </div>
            </div>
        @endif
    </div>
    <div class="grid px-8 mt-10">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</div>
