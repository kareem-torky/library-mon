<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('id', 'DESC')->paginate(3);

        return view('authors.index', [
            'authors' => $authors
        ]);
    }

    public function latest()
    {
        $authors = Author::orderBy('id', 'DESC')
        ->take(3)
        ->get();

        return view('authors.latest', [
            'authors' => $authors
        ]);
    }

    public function show($id)
    {
        $author = Author::find($id);

        return view('authors.show', [
            'author' => $author
        ]);
    }

    public function search($word)
    {
        $authors = Author::where('name', 'like', "%$word%")
        ->get();

        return view('authors.search', [
            'authors' => $authors
        ]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'bio' => 'required|string',
        ]);

        Author::create([
            'name' => $request->name,
            'bio'  => $request->bio
        ]);

        return redirect( route('authors.index') );
    }

    public function edit($id)
    {
        $author = Author::find($id);

        return view('authors.edit', [
            'author' => $author
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'bio' => 'required|string',
        ]);
        
        Author::find($id)->update([
            'name' => $request->name,
            'bio'  => $request->bio
        ]);

        return back();
    }

    public function delete($id)
    {
        Author::find($id)->delete();

        return redirect( route('authors.index') );
    }
}
