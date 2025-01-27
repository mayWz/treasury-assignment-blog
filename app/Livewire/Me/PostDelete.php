<?php

namespace App\Livewire\Me;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PostDelete extends Component
{
    /**
     * Delete the given user.
     */
    public function delete(Post $post): void
    {
        DB::transaction(function () use ($post) {
            $post->delete();
        });
    }
}
