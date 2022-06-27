<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function create()
    {
        return view('contacts.create');
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
            'name' => 'required',
            'email' => ['required',Rule::unique('contacts', 'email')],
            'subject' => 'required',
            'message' => 'required'
        ]);

        Comment::create($attributes);

        return redirect('/thoughts');
    }
}
