<?php

namespace App\Livewire\Me;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class PostUpdate extends Component
{
    public $post;
    public $title;
    public $content;
    public $status;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->status = $post->status;
    }

    public function save()
    {
        $post = Post::where('id', $this->post->id)
            ->update([
                'title' => $this->title,
                'content' => $this->content,
            ]);

        return redirect()->to('/dashboard')
            ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.me.post-update', [
            'post' => $this->post,
            'author' => Auth::user()->name,
        ]);
    }
}
