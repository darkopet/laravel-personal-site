<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.thoughts.index', [
            'post' => Post::paginate(100)
        ]);
    }

    public function create()
    {
        return view('admin.thoughts.create');
    }

    public function store()
    {
        // dd($this);
        // $attributes = array_merge($this->validatePost(), [
        //         'user_id' => request()->user()->id,
        //         'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        //     ]);
        // dd($attributes);
        // Post::create(array_merge($this->validatePost(), [
        //     'user_id' => request()->user()->id,
        //     'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        // ]));
        // Post::create($attributes);
        // return redirect('/');

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/thoughts');
    }

    public function edit(Post $thought)     // $post does not take the item for database, $thought does and is deleted afterwards
    {
        return view('admin.thoughts.edit', ['post' => $thought]);   // $post does not take the item for database, $thought does and is deleted afterwards
    }

    public function update(Post $thought)
    {
        // $attributes = $this->validatePost($post);
        // if ($attributes['thumbnail'] ?? false) {
        //     $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        // }
        // $post->update($attributes);
        // return back()->with('success', 'Post Updated!');

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($thought->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $thought->update($attributes);
        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $thought) // $post does not take the item for database, $thought does and is deleted afterwards
    {
        $thought->delete();
        return back()->with('success', 'Post Deleted!');
    }

    // protected function validatePost(?Post $post = null): array
    // {
    //     $post ??= new Post();
    //     // dd($post);
    //     return request()->validate([
    //         'title' => 'required',
    //         'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
    //         'slug' => ['required', Rule::unique('s', 'slug')->ignore($post)],
    //         'excerpt' => 'required',
    //         'body' => 'required',
    //         'category_id' => ['required', Rule::exists('categories', 'id')],
    //         'published_at' => 'required'
    //     ]);
    // }
}
