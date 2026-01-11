<?php

namespace App\Livewire;
 
use Livewire\Attributes\Validate; 
use Livewire\Component;
use App\Models\User;

class ShowCreateUser extends Component
{ 
    
    #[Validate('required', message: "Vänligen ange ditt namn.")]
    public $name = '';
    #[Validate('required', message: "Vänligen ange din adress.")]
    public $address = '';
    #[Validate('required', message:"Vänligen ange din mejladress.")]
    #[Validate('unique:users', message:"Denna mejladress är redan i bruk.")]
    #[Validate('email', message:"Vänligen ange en giltig mejladress.")]
    public $email = '';
    #[Validate('required', message:"Vänligen ange din kundtyp.")]
    public $type = '';

    public function store()
    {
        $this->validate();

        User::create(
            $this->only(['name', 'address', 'email', 'type'])
        );
 
        session()->flash('success', 'Den nya kunden har lagts till i databasen.');
 
        return $this->redirect(route('kunddetaljer'));
    }

    public function render()
    {
        return view('livewire.show-create-user');
    }
}
