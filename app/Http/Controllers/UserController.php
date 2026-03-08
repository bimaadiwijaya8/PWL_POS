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
        // Membuat user baru di database
        $user = UserModel::create([
            'username' => 'manager11',
            'nama'     => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        // Mengubah nilai atribut username pada objek $user
        $user->username = 'manager12';

        // Menyimpan perubahan ke database
        $user->save();

        // Mengecek status perubahan menggunakan wasChanged()
        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        
        // Melakukan dump and die untuk hasil pengecekan array atribut
        dd($user->wasChanged(['nama', 'username'])); // true
    }
}
