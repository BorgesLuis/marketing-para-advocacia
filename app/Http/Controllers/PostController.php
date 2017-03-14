<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class PostController extends Controller
{

    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return $this->postService->getPosts();
    }

    public function create()
    {
        return View::make('blog.create');
    }

    public function store(Request $request)
    {
        $p = new Post();
        $p->titulo = $request->titulo;
        $p->mensagem = $request->mensagem;
        $p->save();
        Session::flash('success', 'Post criado com sucesso!');
        return redirect()->to('/admin/');
    }

    public function show($id)
    {
        return view('blog.show')->with('p', Post::find($id));
    }

    public function edit($id)
    {
        $p = Post::find($id);
        return view('blog.edit')->with('p', $p);
    }

    public function update(Request $request, $id)
    {
        $p = Post::find($id);
        $p->titulo = $request->titulo;
        $p->mensagem = $request->mensagem;
        $p->save();
        Session::flash('success', 'Post atualizado com sucesso!');
        return redirect()->to('/admin/');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        Session::flash('success', 'Post apagado com sucesso!');
        return redirect()->to('/admin/');
    }
}
