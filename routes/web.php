<?php

use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('form', function (){
   return view('form', [
       'terms' => true,
       'isAdmin' => true,
       'versions' => ['8.0', '8.1', '8.2', '8.3'],
       'versionApp' => '8.2'
   ]);
});

Route::post('form/send', function (Request $request){
    dump($request->all());
});
