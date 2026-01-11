<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\User;

class CreateUserForm extends Component
{
    
    #[Validate('required')]
    public $name = '';
    #[Validate('required')]
    public $address = '';
    #[Validate('required|unique:users')]
    public $email = '';
    #[Validate('required')]
    public $type = '';
 
    public function save()
    {
        $this->validate();

        User::create(
            $this->only(['name', 'address', 'email', 'type'])
        );
 
        session()->flash('success', 'User successfully updated.');
 
        return $this->redirect(route('kundlista'));
    }

    public function render()
    {
        return view('livewire.create-user-form');
    }
}
