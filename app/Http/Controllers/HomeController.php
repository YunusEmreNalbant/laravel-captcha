<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'captcha'=>'required|captcha'
        ]);
    }



    public function refreshCaptcha()
    {
        return response()->json(['captcha'=>captcha_img()]);

    }

}
