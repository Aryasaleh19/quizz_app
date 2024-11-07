<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return view('home', ['title' => 'Dashboard']);
        } else {
            return view('login', ['title' => 'Login']);
        }
    }
    //
    public function regist(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['message' => 'success', 200]);
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $user = User::where('name', $request->username)->first();
    //     if ($user) {
    //         if (Hash::check($request->password, $user->password)) {
    //             $request->session()->put('loginId', $user->id);
    //             return redirect('/');
    //         } else {
    //             return back()->with('fail', 'Password anda salah');
    //         }
    //     } else {
    //         return back()->with('fail', 'Username anda salah');
    //     }
    // }

    public function Login(Request $request)
    {
        $kardinalitas = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt($kardinalitas)) {
            $request->session()->regenerate();
            $role = User::where('role', 'guru')->get();
            if (Auth::user()->role == 'guru') {
                return redirect('/dashboard');
            }
            return redirect('/');
        } else {
            return back()->with('fail', 'login gagal');
        }
    }


    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function editMateri()
    {
        // dd(Auth::user()->id);
        $materi = Materi::where('user_id', Auth::user()->id)->get();
        // dd($materi);
        return view('edit-materi', ['title' => 'Materi', 'materi' => $materi]);
    }

    public function tambahMateri()
    {
        return view('add-materi', ['title' => 'Materi']);
    }

    public function admin(Request $request)
    {
        session(['button_component' => $request->input('component')]);
        return response()->json(['success' => true]);
    }

    public function guru(Request $request)
    {
        $quiz = Quiz::count();
        session(['button_component' => $request->input('component')]);
        dd($quiz);
        return view('admin.dashboard', ['title' => 'Dashboard', 'quiz' => $quiz]);
    }
}
