<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        $role = Auth::user()->role;
        
        if ($role == 'guru') {
            return view('guru.dashboard');
        }
        if ($role == 'siswa') {
            return view('dashboard');
        }

    }
}
