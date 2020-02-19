<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as contrl;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\TransportModel;
use Illuminate\Validation\Validator;
use mysql_xdevapi\BaseResult;
use phpDocumentor\Reflection\Types\Integer;


class HomeTransportController extends contrl
{
    public function getTransports()
    	{
            $transports = (new TransportModel)->getTransports();
    		return view('home',
                ['transports' => $transports]
            );
    	}

    public function postTransport(Request $request) {
        $search = $request->get("search");
        $search_secure = htmlspecialchars(strval($search));
        $res = array();
        $transports = (new TransportModel)->getTransports();
        if(!empty($search_secure)) {
            foreach ($transports as $t) {
                if (strpos(strval($t[1]), strval($search_secure)) !== false) {
                    array_push($res, $t);
                }
            }
        }else{
            return view('home',
                ['transports' => $transports]
            );
        }
        if(empty($res)) {
            return view('home', [
                    'transports' => $transports,
                    'error' => "aucun résultat",
                ]
            );
        }
        else{
            return view('home',
                ['transports' => $res]
            );
        }

    }
}
