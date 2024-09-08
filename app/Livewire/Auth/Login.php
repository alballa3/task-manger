<?php

namespace App\Livewire\Auth;

use Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]
    public $email;
    public $password;
    public $RememberMe = false;
    public function rules(){
        return[
            "email" => "required|email",
            "password" => "required"
        ];
    }
    public function save(){
        $data=$this->validate();
        if(Auth::attempt($data,$this->RememberMe)){
            return redirect()->route('dashboard');
        }
        $this->addError('email','Invalid email or password');
        $this->addError('password','Invalid email or password');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
