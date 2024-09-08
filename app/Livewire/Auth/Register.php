<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    public function rules(){
        return[
            "name" => "required",
            "email" => "required|email",
            "password"=> "required|string|min:8",
            "password_confirmation" => "required|same:password"
        ];
    }

    public function save(){

        $data=$this->validate();

        $datas = Http::get('https://zenquotes.io/api/random');
        $quote = $datas->json()[0]["q"];
        unset($data["password_confirmation"]);
        $data["password_without_hash"]=$data["password"];

        $user=User::create($data);
        Auth::login($user);
        return redirect("/");
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
