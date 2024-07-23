<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class UserForm extends Component
{
    
    //#[Validate('required')]
    #[Validate]
    public $name;

    //#[Validate('required')]
    public $email;

    //#[Validate('required')]
    public $password;


    public function rules()
    {
        return[
            'name' => 'required|max:8',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ];

    }

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

        $this->dispatch('update-users-list');
    }

    #[On('edit-user')]
    public function edit(User $user)
    {
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
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
