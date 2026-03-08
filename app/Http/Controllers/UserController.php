<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; // Pastikan untuk mengimpor model UserModel
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }

    public function index()
    {
        $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        return view('user', ['data' => $user]);
    }
}