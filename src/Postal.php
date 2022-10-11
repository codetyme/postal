<?php

namespace Codetyme\Postal;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Postal {

    public function pin($search = '')
    {
        $response = !empty($search) ? Http::get('https://api.postalpincode.in/pincode/'.trim($search)) : json_encode([['Message' => 'No records found', 'Status' => 'Error', 'PostOffice' => null]]);

        return response()->json(json_decode($response, true), 200, [], JSON_PRETTY_PRINT);
    }

    public function branch($search = '')
    {
        $response = !empty($search) ? Http::get('https://api.postalpincode.in/postoffice/'.trim($search)) : json_encode([['Message' => 'No records found', 'Status' => 'Error', 'PostOffice' => null]]);

        return response()->json(json_decode($response, true), 200, [], JSON_PRETTY_PRINT);
    }

}

?>
