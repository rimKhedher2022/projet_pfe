<?php

namespace App\Http\Controllers\Ensg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function index() {

        return view('Ensg.Components.index');
    }
}
