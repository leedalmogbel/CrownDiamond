<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use TCG\Voyager\Facades\Voyager;

class DashboardController extends Controller
{
    //
    // use Auth;

    public function dashboard() {
        $user = Auth::user();
        // dd($temp);
        if(Auth::check()) {
            return view ('dashboard.dashboard',
                ['name' => $user->name]
            );
        } else {
            return Voyager::view('voyager::login');
        }
    }

    public function edit() {
        $user = \Auth::user();
        return view (
            'dashboard.edit',
            ['name' => $user->name]
        );
    }

}
