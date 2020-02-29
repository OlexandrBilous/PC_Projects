<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function showViewCreateArticle(){
        $first= 'name';
        $last= 'surname';
        return view('forms.CreateArticle', compact('first', 'last'));
    }
}
