<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;

class ShowEditUser extends Component
{

    // #[Validate('required')]
    // #[Validate]
    public $name;
    // #[Validate('required')]
    // #[Validate]
    public $address;
    // Must implement validation rule of 'only one allowed'
    // #[Validate('required|unique:users')]
    // #[Validate]
    public $email;
    // #[Validate('required')]
    // #[Validate]
    public $type;

    public $user;

    public $id;

    protected function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'email' => ['required',
            Rule::unique('users')->ignore($this->user),
            ],
            'type' => 'required'
        ];
    }

    public function mount($id){
        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->address = $this->user->address;
        $this->email = $this->user->email;
        $this->type = $this->user->type;
    }

    public function update(){

        $this->validate();
 
        $this->user->update(
            $this->only(['name', 'address', 'email', 'type'])
        );

        return $this->redirect(route('kundlista'));
    }

    public function render(){
        return view('livewire.show-edit-user');
    }
}
