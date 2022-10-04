<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateLanguage($lang)
    {
        Auth::user()->update([
            'lang' => $lang,
        ]);

        return redirect()->back();
    }
}
