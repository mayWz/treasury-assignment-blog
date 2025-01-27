<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200 relative overflow-x-auto">

                <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                #
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Status
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Title
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Content
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Published Date
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($posts)
                            @foreach ($posts as $post)
                                <tr class="bg-white border-b hover:bg-gray-800">
                                    <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $post->id }}
                                        </p>
                                    </td>
                                    <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $post->status }}
                                        </p>
                                    </td>
                                    <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $post->title }}
                                        </p>
                                    </td>
                                    <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ Str::limit($post->content, 20) }}
                                        </p>
                                    </td>
                                    <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $post->created_at }}
                                        </p>
                                    </td>
                                    <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">

                                        <a href="{{ route('posts.update', $post) }}"
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                                            {{ __('Edit') }}
                                        </a>
                                        <a href="#" wire:click="delete({{ $post->id }})"
                                            wire:confirm="Are you sure you want to delete this post?"
                                            class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            {{ __('Delete') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $posts->links('pagination::tailwind') }}
                </div>


            </div>
        </div>
    </div>


</div>
