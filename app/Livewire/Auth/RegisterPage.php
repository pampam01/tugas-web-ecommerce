<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register')]
class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;


    // register user 
    public function save()
    {
        // dd($this->name, $this->email, $this->password);
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        // save user to databasse 
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        //login user 
        auth()->login($user);

        // redirect to home page
        return redirect()->intended('/');


    }
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
