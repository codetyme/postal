<?php

namespace Codetyme\Postal;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Postal {
    public function pin($search = '') {
        $response = Http::get('https://api.postalpincode.in/pincode/'.$search);

        return $response;
    }

    public function branch($search = '') {
        $response = Http::get('https://api.postalpincode.in/postoffice/'.$search);

        return $response;
    }
}

?>
