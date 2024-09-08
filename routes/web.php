<?php

use App\Http\Middleware\checkUser;
use App\Livewire\App\Dashboard;
use App\Livewire\Auth\Edit;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Profile;
use App\Livewire\Auth\Register;
use App\Livewire\CreatePost;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');

});
Route::get("/profile/{id}",Profile::class)->name("profile");
//User Authentication
Route::middleware(["guest"])->group(function(){
    Route::get("/login",Login::class)->name("login");
    Route::get("/register",Register::class)->name("register");
});
Route::middleware("auth")->group(function(){
    //Main App
    Route::get('/dashboard',Dashboard::class)->name("dashboard");
    Route::get("/edit/{id}",Edit::class)->name("edit")->middleware(checkUser::class);
    //Logout
    Route::get('/logout',function(){
        auth()->logout();
        return redirect()->route("login");
    })->name("logout");
});

