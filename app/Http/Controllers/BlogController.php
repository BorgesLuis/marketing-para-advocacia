<?php
/**
 * Created by PhpStorm.
 * User: joaopaulosr
 * Date: 3/13/17
 * Time: 10:30 AM
 */

namespace App\Http\Controllers;


use App\Services\PostService;

class BlogController extends Controller
{

    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function landing()
    {
        return view('landing');
    }

    public function index()
    {
        return view('blog.index')->with('p', $this->postService->getPosts());
    }

}