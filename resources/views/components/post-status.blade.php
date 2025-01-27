@props(['status'])

@switch($status)
    @case(\App\Enums\PostStatus::PUBLISHED->value)
        <span
            class="inline-flex items-center m-2 px-3 py-1 bg-green-200 hover:bg-green-300 rounded-full text-sm font-semibold text-green-600">
            <span class="ml-1">
                {{ $status }}
            </span>
        </span>
    @break

    @case(\App\Enums\PostStatus::DRAFT->value)
        <span
            class="inline-flex items-center m-2 px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-full text-sm font-semibold text-gray-600">
            <span class="ml-1">
                {{ $status }}
            </span>
        </span>
    @break

    @default
        <span>
            {{ $status }}
        </span>
@endswitch
