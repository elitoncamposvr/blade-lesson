<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('view', function () {
    $users = User::all();

    $user = User::query()->first();

   return view('site.home', [
       'users' => $users,
       'client' => $user,
       'welcome' => "<strong>Seja bem vindo,</strong>",
   ]);

//   return view('site.home', compact('users'));
});
