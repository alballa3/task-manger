<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    

    public function render()
    {


        return view('livewire.auth.edit');
    }
}
