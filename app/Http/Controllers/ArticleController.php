<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $member = Auth::user()->member;
        // ddd($member);
        if ($member == 'platinum')
        {
            $article = Article::all();
        }
        else
        {
            $article = Article::where('member',$member)->get();
        }
        return view('Articles.index',[
            'data' => $article
        ]);
    }

    Public function detail (Request $request)
    {
        $article = Article::where('slug',$request->slug)->first();
        return view('Articles.detail', [
            'data' => $article
        ]);
    }
}

