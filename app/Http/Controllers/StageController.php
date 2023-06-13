<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class StageController extends Controller
{
    public function create(): View
    {
        return view('stage.create');
    }
 
    /**
     * Store a new blog post.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'type' => 'required',
            'sujet' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'societe_id' => 'required',
        ]);
     
      
     
        return redirect('/stages');
     
    }
}
