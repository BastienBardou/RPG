<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;




class UsersController extends Controller
{

    public function index()
    {
        return view('index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|regex:/^(?=.[a-zA-Z])(?=.\d)(?=.[!@#$%^&()-_=+{};:,<.>])(?!.*\s).{8,}$/',
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'pseudo' => 'required|string|max:255|unique:users,pseudo'
        // ]);

        $user = new User;


        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->pseudo = $request->input('pseudo');


        $user->save();

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('login.auth', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);
    }

    
}
