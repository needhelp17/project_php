<?php

namespace App\Http\Controllers;

use App\TransportModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model;

class TransportController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getTransport($id){
        $transport = (new TransportModel)->getTransport($id-1);
        return view('transportDetails',
            ['transport' => $transport]
        );
    }
}
