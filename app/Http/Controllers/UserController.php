<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\View\View;

class UserController extends Controller

{

    public function createTest(): User{
        $user = new User;
        $user->name = 'John Doe';
        $user->type = 'Privat';
        $user->address = 'Testgatan 7';
        $user->email = 'test@testlook.com';
    }

    public function createUser (Request $request): User {
    $userCredentials = [
        'name' => $request->name,
        'type' => $request->type,
        'address' => $request->address,
        'email' => $request->email,
    ];
	$user = $this->create($userCredentials);
    }

    public function show($id){
        $user = User::find($id);

        return view('editUser', compact('user'));
    }

    public function index(): View{
        $users = User::all();

        return view('kundlista', ['users' => $users]);
    }

}