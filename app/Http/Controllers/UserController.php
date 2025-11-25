<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // ============================
    // REGISTER FORM
    // ============================
    public function register()
    {
        return view('register'); 
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'nama'       => 'required|regex:/^[A-Za-z ]+$/',
            'email'      => 'required|email',
            'alamat'     => 'required|min:5',
            'no_telfon'  => 'required|digits_between:10,15',
            'password'   => 'required|min:5',
        ], [
            'nama.regex' => 'Nama tidak boleh mengandung angka atau simbol.',
        ]);

        User::create([
            'name'     => $request->nama,
            'email'    => $request->email,
            'alamat'   => $request->alamat,
            'no_telfon'    => $request->no_telfon,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login.form')->with('success', 'Registrasi Berhasil! Silakan Login.');
    }


    // ============================
    // LOGIN
    // ============================
    public function loginForm()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Cek user
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email atau Password salah!');
        }

        Auth::login($user);

        // Redirect sesuai role
        if ($user->role === 'admin') {
            return redirect()->route('users.index')->with('success', 'Login sebagai admin');
        }
        

        return redirect()->route('home')->with('success', 'Login Berhasil!');
    }


    // ============================
    // LOGOUT
    // ============================
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Berhasil Logout');
    }


     public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'no_telfon' => 'required|string'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->no_telfon = $request->no_telfon;

        // hanya update password jika diisi
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Data berhasil diupdate!');
        }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('success', 'Data berhasil dihapus!');
    }

    // ============================
    // DASHBOARD
    // ============================
    public function dashboard()
    {
        return view('user.dashboard');
    }
}