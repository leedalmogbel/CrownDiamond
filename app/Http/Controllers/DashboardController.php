<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    // use Auth;

    public function dashboard() {
        $user = Auth::user();
        // dd($temp);
        return view ('dashboard.dashboard',
            ['name' => $user->name]
        );
    }

}
