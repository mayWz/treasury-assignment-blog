<?php

namespace App\Livewire\Me;

use Throwable;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
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
        try {
            $post = Post::findOrFail($id);
            if (Auth::User()->id !== $post->author_id) {
                throw new AuthorizationException;
            }
            $post->delete();
        } catch (Throwable $e) {
            $message = $e->getMessage();
            Log::info($message);
            return back()->withError($message)->withInput();
        }

        return redirect()->to('/dashboard');
    }
}
