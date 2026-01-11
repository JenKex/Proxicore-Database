<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

    public function createUser (Request $request) {

        $validated = $request->validate([
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'email' => 'required|unique:users|max:255',
        'type' => 'required'
    ]);
    
    $user = new User();

    // use some sort of 'parse all data as usercredentials, then save all to respective field' to avoid having to update this every time

    // $userCredentials = [
        $user->name = $request->name;
        $user->type = $request->type;
        $user->address = $request->address;
        $user->email = $request->email;
    // ];
	// $user->$userCredentials;

    $user->save();

    return back();
    }

    public function show($id){
        $user = User::find($id);

        return view('editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->update([
            $user->name = $request->name,
            $user->type = $request->type,
            $user->address = $request->address,
            $user->email = $request->email
        ]);
 
        return redirect()->route('kundlista'); 
    }

    public function index(): View{
        $users = User::all();

        return view(route('kundlista'), ['users' => $users]);
    }

}