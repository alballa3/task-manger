<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $id;
    public function mount($id){
        $this->id = $id;
    }
    public function render()
    {
        $user=User::findOrFail($this->id);
        return view('livewire.auth.profile',[
            "user"=>$user
        ]);
    }
}
