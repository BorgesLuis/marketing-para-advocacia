<?php
/**
 * Created by PhpStorm.
 * User: joaopaulosr
 * Date: 3/12/17
 * Time: 6:15 PM
 */

namespace App\Http\Controllers;


use App\Services\LeadService;
use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Session;


class LeadController extends Controller
{

    private $leadService;

    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
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
            $l->ip = file_get_contents('https://api.ipify.org');
            $l->nome = $request->nome;
            $l->sobrenome = $request->sobrenome;
            $l->email = $request->email;
            $l->categoria = $request->categoria;
            $l->save();
        }
        return view('blog.lead');
    }

    public function destroy($id)
    {
        Lead::find($id)->delete();
        Session::flash('success', 'Lead desqualificado com sucesso!');
        return redirect()->to('/admin/');
    }
}