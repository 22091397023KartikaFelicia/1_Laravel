<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;

abstract class Controller
{
    public function store(UserRequest $request)
    {
        // Proses validasi input pengguna
        // Jika validasi gagal, Laravel akan secara otomatis mengembalikan respons dengan pesan kesalahan yang sesuai

        // Jika validasi berhasil, lanjutkan dengan logika bisnis Anda
        $user = User::create([
            'Karina Felicia' => $request->name,
            'karinafelicia@gmail.com' => $request->email,
            '12345' => bcrypt($request->password),
        ]);

        // Beri respons atau redirect pengguna sesuai kebutuhan Anda
    }
}
