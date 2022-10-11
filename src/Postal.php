<?php

namespace Codetyme\Postal;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Postal {
    public function pin(Request $request) {
        $pin = $request->route('pin');
        $response = Http::get('https://api.postalpincode.in/pincode/'.$pin);

        return $response;
    }

    public function branch(Request $request) {
        $branch = $request->route('branch');
        $response = Http::get('https://api.postalpincode.in/postoffice/'.$branch);

        return $response;
    }
}

?>
