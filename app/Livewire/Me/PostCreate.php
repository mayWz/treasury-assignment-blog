<?php

namespace App\Livewire\Me;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class PostCreate extends Component
{
    public $title;
    public $content;

    public function save()
    {
        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'author_id' => Auth::user()->id,
        ]);

        return redirect()->to('/dashboard')
            ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.me.post-create')->with([
            'author' => Auth::user()->name,
        ]);;
    }
}
