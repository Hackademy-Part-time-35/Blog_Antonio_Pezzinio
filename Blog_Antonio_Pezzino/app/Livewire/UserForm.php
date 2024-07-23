<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class UserForm extends Component
{
    use WithFileUploads;

    public $userId = null;
    
    //#[Validate('required')]
    #[Validate]
    public $name;

    //#[Validate('required')]
    public $email;

    //#[Validate('required')]
    public $password;

    #[Validate('image|max:2048')]
    public $photo;


    public function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
        ];

        if(! $this->userId) {
            $rules['password'] = 'required';
        }

        return $rules;
    }

    public function submit()
    {

        $this->validate();

        if($this->userId){
                //modalità modifica

                $user = User::find($this->userId);

               // $user->update($this->only('name', 'email', 'password'));

               $user->name = $this->name;
               $user->email = $this->email;

                if($this->password){
                    $user->password = $this->password;
                }

                $user->save();


                session()->flash('success', 'Utende Modificato con SUCCESSO!!');

        } else {

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);

            if($this->photo) {
                $fileName = $user->id . '.' . $this->photo->extension();
                $this->photo = $this->photo->storeAs('public/images/avatars', $fileName );
                $user->save();
                

            }

            session()->flash('success', 'Nuovo Utente Creato');
        }

        

        

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
        $this->userId= null;
        $this->name ='';
        $this->email ='';
        $this->password ='';
        $this->photo ='';
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
