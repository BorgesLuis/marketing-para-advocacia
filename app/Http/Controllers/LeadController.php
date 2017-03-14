<?php
/**
 * Created by PhpStorm.
 * User: joaopaulosr
 * Date: 3/12/17
 * Time: 6:15 PM
 */

namespace App\Http\Controllers;


use App\Services\LeadService;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class LeadController extends Controller
{

    private $leadService;
    private $postService;

    public function __construct(LeadService $leadService, PostService $postService)
    {
        $this->leadService = $leadService;
        $this->postServoce = $postService;
    }

    public function index()
    {
        return $this->leadService->getLeads();
    }

    public function store(Request $request)
    {
        $l = Lead::where('email', $request->email)->first();
        if (!$l) {
            $l = new Lead();
            $l->ip = $request->ip;
            $l->nome = $request->nome;
            $l->sobrenome = $request->sobrenome;
            $l->email = $request->email;
            $l->categoria = $request->categoria;
            $l->save();
        }

        $nomeArq = 'ebook_mkt_conteudo.pdf';
        $caminho = public_path(). '/download/' . $nomeArq;
        $headers = ['Content-Type: application/pdf'];
        redirect()->to('/');
        return response()->download($caminho, $nomeArq, $headers);

    }

    public function destroy($id)
    {
        Lead::find($id)->delete();
        Session::flash('success', 'Lead desqualificado com sucesso!');
        return redirect()->to('/admin/');
    }
}