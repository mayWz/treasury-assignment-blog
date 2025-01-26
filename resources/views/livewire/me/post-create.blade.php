<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('New Post') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <form wire:submit="save"> 
                    <div>
                        <x-label for="title" value="{{ __('Title:') }}" />
                        <x-input id="title" wire:model="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-label for="content" value="{{ __('Your Content:') }}" />
                        <x-textarea id="content" wire:model="content" class="block mt-1 w-full" type="textarea" name="content" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        {{ _('Author') }} : {{ $author }}
                        <x-button class="ms-4">
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
