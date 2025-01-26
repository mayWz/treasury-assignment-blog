<?php

namespace App\Livewire\Me;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

#[Layout('layouts.app')]
class PostList extends Component
{
    use WithPagination;

    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.me.post-list', [
            'posts' => Post::where('title', 'like', '%' . $this->query . '%')
                ->where('author_id', Auth::user()->id)
                ->paginate(10),
        ]);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        if (Auth::User()->id !== $post->author_id) {
            throw new AuthorizationException;
        }
        $post->delete();

        return redirect()->to('/dashboard')
            ->with('status', 'Post deleted!!');
    }
}
