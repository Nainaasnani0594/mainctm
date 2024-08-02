<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Auth/AdminLogin');
        dd(Auth::user()->role,'data');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            dd(Auth::user()->role,'data');
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('admin/dashboard');
            }
            Auth::logout();
            return back()->withErrors([
                'email' => 'You are not authorized to access the admin dashboard.',
            ])->onlyInput('email');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
