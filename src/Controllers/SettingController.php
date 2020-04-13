<?php

namespace MySang\LaravelAdmin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class SettingController extends Controller
{
    /**
     * Index
     */
    public function index(Request $request)
    {
        return view('laraveladmin::settings.index');
    }
}
