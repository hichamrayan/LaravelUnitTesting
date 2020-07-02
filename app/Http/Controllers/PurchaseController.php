<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;

class PurchaseController extends Controller
{
    public function buy(Request $request)
    {
        Purchase::create($request->all());
        return response(null,201);
    }
}
