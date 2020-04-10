<?php

namespace MySang\LaravelAdmin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    /**
     * Login form
     */
    public function login()
    {
        // dd(sangtest());
        return view('laraveladmin::auth.login');
    }
}
