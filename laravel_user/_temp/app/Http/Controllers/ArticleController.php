<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;

class ArticleController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('article',[
            'artikel' => $artikel
        ]);
    }

    public function articledetail()
    {
        return view('articledetail');
    }
}
