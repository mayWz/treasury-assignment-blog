<div>
    <div class="grid gap-6 px-8 lg:grid-cols-1 lg:gap-8">
        @if ($post)
            <div class="py-6 bg-white rounded-lg shadow-md">
                <div class="p-4">
                    <h1 class="text-4xl font-semibold text-black">
                        {{ $post->title }}
                    </h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16px"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>
                        <p class="ml-2">
                            {{ $post->author->name }}
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" class="ml-2"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l80 0 0 56-80 0 0-56zm0 104l80 0 0 64-80 0 0-64zm128 0l96 0 0 64-96 0 0-64zm144 0l80 0 0 64-80 0 0-64zm80-48l-80 0 0-56 80 0 0 56zm0 160l0 40c0 8.8-7.2 16-16 16l-64 0 0-56 80 0zm-128 0l0 56-96 0 0-56 96 0zm-144 0l0 56-64 0c-8.8 0-16-7.2-16-16l0-40 80 0zM272 248l-96 0 0-56 96 0 0 56z" />
                        </svg>
                        <p class="ml-2">
                            {{ \Carbon\Carbon::parse($post->created_at)->format('D d M, Y') }}
                        </p>
                    </div>
                    <hr />
                    <div class="mt-4 mb-4">
                        {{ $post->content }}
                    </div>
                    <hr />
                </div>
            </div>
        @else
            <div class="py-6 bg-white rounded-lg shadow-md">
                <div class="p-4">
                    {{ __('Blog Not Found') }}
                </div>
            </div>
        @endif
    </div>
</div>
