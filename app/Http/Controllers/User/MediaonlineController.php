<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaonlineController extends Controller
{
    public function create()
    {
        $data['title'] = "Formulir pendaftaran media online";
        return view('user.mediaoline.create', $data);
    }
}
