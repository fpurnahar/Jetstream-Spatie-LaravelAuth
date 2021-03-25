<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginResponse extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $CheckRole = Auth::user();
        if ($CheckRole->hasRole('super_admin')) {
            return redirect('/super_admin');
        } elseif ($CheckRole->hasRole('admin')) {
            return redirect('/admin');
        } else {
            return redirect('/dashboard');
        }
    }
}
