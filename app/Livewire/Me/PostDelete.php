<?php

namespace App\Livewire\Me;

use Throwable;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class PostDelete extends Component
{
    /**
     * Delete the given user.
     */
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
