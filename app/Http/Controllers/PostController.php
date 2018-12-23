<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categories;

class PostController extends Controller
{

	public function index()
	{
		$posts = Posts::all();

		return view('post.index', compact('posts'));
	}

    public function create()
    {
    	$categories = Categories::all();

    	return view('post.create', compact('categories'));
    }

    public function store()
    {
    	Posts::create([

    		'category_id' => request('category_id'),
    		'title' => request('title'),
    		'slug' => str_slug(request('title')),
    		'content' => request('content')

    	]); 

    	return redirect()->route('post.index')->with('success', 'Data Berhasil ditambahkan');
    }

    public function show(Posts $posts)
    {
    	return view('post.show', compact('posts'));
    }

    public function edit(Posts $posts)
    {
    	// $posts = Posts::find($id);
    	// tidak usah make yang diatas ini lagi karena diatas update sudah di set parameternya 

    	$categories = Categories::all();

    	return view('post.edit', compact('posts', 'categories')); 
    }

    public function update(Posts $posts)
    {
    	// $posts = Posts::find($id);
    	// tidak usah make yang diatas ini lagi karena diatas update sudah di set parameternya  

    	$posts->update([
    		'title' => request('title'),
    		'category_id' => request('category_id'),
    		'content' => request('content')
    	]);

    	return redirect()->route('post.index')->withInfo('Data berhasil diedit');
    }

    public function destroy(Posts $posts)
    {
    	$posts->delete();

    	return redirect()->route('post.index')->withDanger('Data berhasil didelete');
    }

}
