<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    //
    Public function index()
    {
        $member = Auth::user()->member;
        // ddd($member);
        if ($member == 'platinum')
        {
            $video = Video::all();
        }
        else
        {
            $video = Video::where('member',$member)->get();
        }
        return view('Videos.index',[
            'data' => $video
        ]);
    }

    Public function detail (Request $request)
    {
        $video = Video::where('slug',$request->slug)->first();
        return view('Videos.detail', [
            'data' => $video
        ]);
    }

}
