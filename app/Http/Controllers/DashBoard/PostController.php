<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $category = Category::find(1);
        dd($category->posts);
        // $post = Post::find(1);
        // dd($post->Category);

        //para obtener un registro
        //$post = Post::find(3); //es como decir select * from posts where id = 1

        //para eliminar un registro 
       // $post->delete();

        //para actualizar un registro
        // $post->update(
        //     [
        //         'title' => 'test title new',
        //         'slug' => 'test slug new',
        //         'description' => 'test description new',
        //         'content' => 'test content new',       
        //     ]
        // );

        //para crear un registro
        // Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'not',  
        //         'category_id'=> 1            
        //     ]
        // );
        return 'index';//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
