<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Enums\PostStatus;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.storefront')]
class PostList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.post-list', [
            'posts' => Post::where('status', PostStatus::PUBLISHED->value)
                ->orderByDesc('created_at')->paginate(10),
        ]);
    }
}
