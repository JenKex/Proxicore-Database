<?php

namespace App\Livewire;
 
use Livewire\Attributes\Validate; 
use Livewire\Component;
use App\Models\User;

class CreateUserForm extends Component
{

    // public ?User $user;
    
    #[Validate('required')]
    public $name = '';
    #[Validate('required')]
    public $address = '';
    #[Validate('required|unique:users')]
    public $email = '';
    #[Validate('required')]
    public $type = '';

    //     public function setUser(User $user)
    // {
    //     $this->user = $user;
 
    //     $this->name = $user->name;
 
    //     $this->address = $user->address;
    // }

    public function store()
    {
        $this->validate();

        User::create(
            $this->only(['name', 'address', 'email', 'type'])
        );
 
        session()->flash('success', 'User successfully updated.');
 
        return $this->redirect(route('kundlista'));
    }

    // public function update()
    // {
    //     $this->validate();
 
    //     $this->user->update(
    //         $this->only(['name', 'address', 'email', 'type'])
    //     );

    //     return $this->redirect(route('kundlista'));
    // }

    public function render()
    {
        return view('livewire.create-user-form');
    }
}
