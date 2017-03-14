<?php

namespace App\Http\Controllers;

use App\Services\LeadService;
use App\Services\PostService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    private $leadService;
    private $postService;

    public function __construct(LeadService $leadService, PostService $postService)
    {
        $this->postService = $postService;
        $this->leadService = $leadService;
    }

    public function index()
    {
        if (!Auth::check()) {
            return view('admin.login')->withErrors(["Você não tem autorização para acessar essa página"]);
        } else {
            return $this->painelAdmin();
        }
    }

    public function painelAdmin()
    {
        return view('admin.index')
            ->with('p', $this->postService->getPosts())
            ->with('l', $this->leadService->getLeads())
            ->with('countB2B', count($this->leadService->getLeads('B2B')))
            ->with('countB2C', count($this->leadService->getLeads('B2C')));
    }


    function doLogin()
    {
        $validator = Validator::make(Input::all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $user = [
                'email' => Input::get('email'),
                'password' => Input::get('password')
            ];

            // deu bom!
            if (Auth::attempt($user)) {
                Redirect::to('admin.index');
            }
            return redirect()->back()
                ->withErrors('Email/senha invalido(s)')->withInput(Input::except('password'));
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
