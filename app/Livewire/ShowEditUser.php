<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;

class ShowEditUser extends Component
{

    public $name;
    public $address;
    public $email;
    public $type;
    public $user;
    public $id;

    protected function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'email' => ['required',
            'email',
            Rule::unique('users')->ignore($this->user),
            ],
            'type' => 'required'
        ];
    }

        protected function messages() 
    {
        return [
            'name.required' => 'Namnfältet är obligatoriskt.',
            'address.required' => 'Adressfältet är obligatoriskt.',
            'email.required' => 'Mejladressfältet är obligatoriskt.',
            'email.email' => 'Vänligen ange en giltig mejladress.',
            'email.unique' => 'Denna mejladress är redan i bruk.',
            'type.required' => 'Kundtypsfältet är obligatoriskt.'
        ];
    }

    public function mount($id){
        $this->user = User::find($id);
        if ($this->user){
            $this->name = $this->user->name;
            $this->address = $this->user->address;
            $this->email = $this->user->email;
            $this->type = $this->user->type;
        }
    }

    public function update(){

        $this->validate();
 
        $this->user->update(
            $this->only(['name', 'address', 'email', 'type'])
        );

        session()->flash('success', 'Kundens information har redigerats.');

        return back();
    }

    public function render(){
        return view('livewire.show-edit-user');
    }
}
