<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataRequest = $request->validate([
            "fullname" => "required|max:255",
            "nowa" => "required|numeric",
            "email" => "required|email",
            "password" => "required|min:5"
        ]);

        $dataRequest['password'] = bcrypt($request->password);

        User::create($dataRequest);

        return redirect('/login')->with('success', 'Akun Berhasil di Buat');
    }
}
