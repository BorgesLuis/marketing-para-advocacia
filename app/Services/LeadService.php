<?php
/**
 * Created by PhpStorm.
 * User: joaopaulosr
 * Date: 3/13/17
 * Time: 9:46 AM
 */

namespace App\Services;

use App\Lead;
use Illuminate\Support\Facades\Response;
use Exception;

class LeadService
{

    public function getLeads($categoria = null)
    {
        /*try {
            $statusCode = 200;
            $response = [
                'leads' => []
            ];

            $leads = Lead::all();

            foreach ($leads as $lead) {
                $response['leads'][] = [
                    'ip' => $lead->ip,
                    'nome' => $lead->nome,
                    'sobrenome' => $lead->sobrenome,
                    'categoria' => $lead->categoria,
                    'data-captura' => $lead->created_at
                ];
            }

        } catch (Exception $e) {
            $statusCode = 400;
        } finally {
            return Response::json($response, $statusCode);
        }*/
        if ($categoria != null) {
            return Lead::where('categoria', $categoria)->get();
        } else {
            return Lead::all();
        }
    }
}