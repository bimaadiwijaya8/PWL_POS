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
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama'     => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );

        $user->save(); // Perubahan utama ada di baris ini

        return view('user', ['data' => $user]);
    }
}