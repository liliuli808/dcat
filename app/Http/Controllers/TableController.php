<?php

namespace App\Http\Controllers;

use App\Ad;
use App\TableFix;
use Illuminate\Http\Request;

class TableController
{
    public function index(Request $request) {
        return TableFix::query()->orderBy('index')
            ->orderBy('id')
            ->where('type', $request->type)
            ->get()->toArray();
    }
}
