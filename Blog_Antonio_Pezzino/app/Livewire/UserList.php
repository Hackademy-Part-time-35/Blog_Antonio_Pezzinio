<?php

namespace App\Livewire;


use \App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;


class UserList extends Component
{
    public function edit($user_id)
    {
        $this->dispatch('edit-user', $user_id);
    }

    #[On('update-users-list')]
    public function render()
    {
        return view('livewire.user-list', [

            'users' => User::orderBy('id', 'DESC')->get(),
        ]);

    }
}
