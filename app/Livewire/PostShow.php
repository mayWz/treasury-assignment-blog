<?php

namespace App\Livewire;

use Throwable;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

#[Layout('layouts.storefront')]
class PostShow extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post-show', [
            'post' => $this->post,
        ]);
    }

    public function exception(Throwable $e)
    {
        $message = $e->getMessage();
        Log::info($message);

        if ($e instanceof ModelNotFoundException) {
            return back()->withError('Post is not found');
        } else {
            return back()->withError('Something gone wrong..');
        }
    }
}
