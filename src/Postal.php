<?php

namespace Codetyme\Postal;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Postal {
    public function pin($search = '1') {
        $response = Http::get('https://api.postalpincode.in/pincode/'.trim($search));

        return $response;
    }

    public function branch($search = 'codetyme') {
        $response = Http::get('https://api.postalpincode.in/postoffice/'.trim($search));

        return $response;
    }
}

?>
