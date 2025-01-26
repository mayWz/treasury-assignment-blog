<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="relative overflow-x-auto">
                @if ($posts)
                <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                #
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Status
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Title
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Content
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Published Date
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
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
                                        {{ $post->content }}
                                    </p>
                                </td>
                                <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $post->created_at }}
                                    </p>
                                </td>
                                <td class="text-center px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    
                                    <a href="{{ route('posts.update', $post) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                                        {{ __('Edit') }}
                                    </a>
                                    <a href="#" 
                                        wire:click="delete({{ $post->id }})"
                                        wire:confirm="Are you sure you want to delete this post?" 
                                        class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        {{ __('Delete') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    <div class="flex flex-col items-center px-5 py-5 bg-white xs:flex-row xs:justify-between">
                        <div class="flex items-center">
                            <button type="button" class="w-full p-4 text-base text-gray-600 bg-white border rounded-l-xl hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="w-full px-4 py-2 text-base text-indigo-500 bg-white border-t border-b hover:bg-gray-100 ">
                                1
                            </button>
                            <button type="button" class="w-full px-4 py-2 text-base text-gray-600 bg-white border hover:bg-gray-100">
                                2
                            </button>
                            <button type="button" class="w-full px-4 py-2 text-base text-gray-600 bg-white border-t border-b hover:bg-gray-100">
                                3
                            </button>
                            <button type="button" class="w-full px-4 py-2 text-base text-gray-600 bg-white border hover:bg-gray-100">
                                4
                            </button>
                            <button type="button" class="w-full p-4 text-base text-gray-600 bg-white border-t border-b border-r rounded-r-xl hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                @else
                    <p class="mt-6 text-gray-500 leading-relaxed">
                        {{ __('No Post here..') }}
                    </p>
                @endif
            </div>
        </div>
    </div>

   
</div>
