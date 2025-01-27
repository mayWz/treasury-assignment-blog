<?php

namespace App\Livewire\Me;

use Throwable;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class PostCreate extends Component
{
    public $title;
    public $content;

    public function save()
    {
        try {
            Post::create([
                'title' => $this->title,
                'content' => $this->content,
                'author_id' => Auth::user()->id,
            ]);
        } catch (Throwable $e) {
            $message = $e->getMessage();
            Log::info($message);
            return back()->withError($message)->withInput();
        }


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
