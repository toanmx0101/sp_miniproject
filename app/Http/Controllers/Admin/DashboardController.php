<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function index(){    	
    	return view('admin.index');
    }

}
