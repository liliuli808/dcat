<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;

class AdController
{

    public function index(Request $request) {
        return Ad::query()
            ->where('type', $request->type)
            ->get(['id','img_url','jump_url'])->toArray();
    }
}
