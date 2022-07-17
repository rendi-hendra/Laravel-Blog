<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\posting;
use Illuminate\Http\Response;

class usercon extends Controller
{

    public function index()
    {
        $postingans  = posting::latest();

        if (request('search')) {
            $postingans->Where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('dashboard', [
            'postingan' => $postingans->get()
        ]);
    }

    public function show(posting $posting)
    {
        return view('detail', [
            'posting' => $posting
        ]);
    }
}
