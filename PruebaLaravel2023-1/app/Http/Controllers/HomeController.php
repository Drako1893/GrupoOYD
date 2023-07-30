<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    
}

