<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;

class UserForm extends Component
{
    
    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $email;

    #[Validate('required')]
    public $password;

    public function submit()
    {

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        session()->flash('success', 'Nuovo utente creato.');

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name ='';
        $this->email ='';
        $this->password ='';
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
