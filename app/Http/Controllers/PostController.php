<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $query = Posts::with('user')
            ->withCount('likes')
            ->latest();

        if (auth()->check()) {
            $query->withExists([
                'likes as is_liked' => function ($query) {
                    $query->where('post_likes.user_id', auth()->id());
                }
            ]);
        }

        $posts = $query->paginate(12);

        return view('posts.index', compact('posts'));
    }

    public function like(Posts $post)
    {
        $inserted = DB::table('post_likes')->insertOrIgnore([
            'post_id' => $post->id,
            'user_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($inserted) {
            $post->increment('likes_count');

            return back()->with('success', 'وصل إعجابك لصاحب المنشور ❤️');
        }

        return back()->with('success', 'انت عملت إعجاب للمنشور ده قبل كده ❤️');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => ['required', 'string', 'min:3', 'max:5000'],
        ], [
            'content.required' => 'اكتب محتوى المنشور الاول.',
            'content.min' => 'المنشور قصير اوي.',
            'content.max' => 'المنشور طويل زيادة عن اللزوم.',
        ]);

        $request->user()->posts()->create([
            'content' => $validated['content'],
            'likes_count' => 0,
        ]);

        return redirect()
            ->route('posts.index')
            ->with('success', 'تم نشر تبضينتك بنجاح 😂');
    }

    public function show(Posts $post)
    {
        $post->load('user');

        return view('posts.show', compact('post'));
    }

    public function edit(Posts $post)
    {
        $this->authorizePost($post);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Posts $post)
    {
        $this->authorizePost($post);

        $validated = $request->validate([
            'content' => ['required', 'string', 'min:3', 'max:5000'],
        ], [
            'content.required' => 'محتوى المنشور مطلوب.',
            'content.min' => 'المنشور قصير اوي.',
            'content.max' => 'المنشور طويل زيادة عن اللزوم.',
        ]);

        $post->update([
            'content' => $validated['content'],
        ]);

        return redirect()
            ->route('posts.show', $post->id)
            ->with('success', 'تم تعديل المنشور بنجاح.');
    }

    public function destroy(Posts $post)
    {
        $this->authorizePost($post);

        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'تم حذف المنشور.');
    }

    private function authorizePost(Posts $post)
    {
        abort_unless(
            auth()->check() &&
            (
                auth()->id() === $post->user_id ||
                auth()->user()->isAdmin()
            ),
            403
        );
    }
}
