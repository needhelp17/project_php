<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportModel extends Model
{
    function getTransports()
    {
        $res = array();
        $file = fopen("../public/bdd.csv", 'r');
        if ($file) {
            while ($line = fgetcsv($file, 1000, ";")) {
                array_push($res, $line);
            }
            fclose($file);
        }
        return $res;
    }

    function getTransport($id)
    {
        return $this->getTransports()[$id];
    }

}
