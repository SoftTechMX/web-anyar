<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['author:id,name'])->simplePaginate(5);
        $categories = Category::take(10)->get();

        return view('page.post.index')
            ->with('posts', $posts)
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $data = $request->all();

        // Si se sube una imagen, guardarla en el directorio 'public/posts'
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        // Añadir el autor actual
        $data['id_author'] = Auth::id();

        Post::create($data);

        return redirect()->route('post.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('page.post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('page.post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $data = $request->all();

        // Si se sube una nueva imagen, eliminar la anterior y guardar la nueva
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('post.index')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Eliminar la imagen asociada si existe
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('post.index')
            ->with('success', 'Post deleted successfully.');
    }

    /**
     * Search for posts by a search term.
     */
    public function search(Request $request)
    {
        // Validar que se reciba un término de búsqueda
        $request->validate([
            'term' => 'required|string|max:200',
        ]);

        $term = $request->input('term');

        // Buscar los primeros 10 posts que coincidan en el título o contenido
        $posts = Post::where('title', 'like', '%' . $term . '%')
                    ->orWhere('content', 'like', '%' . $term . '%')
                    ->with(['author:id,name']) // Incluir información del autor
                    ->take(10) // Limitar los resultados a los primeros 10
                    ->get();

        return view('page.post.search')->with('posts', $posts)->with('term', $term);
    }
}
