<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $password;
    public $email;

    protected $rules = [
        'email' => 'required|email',
        'password' => ['required', 'string', 'min:8'], 
    ];
    public function render()
    {
        return view('livewire.login');
    }

    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function loginUser()
    {
        $validatedData = $this->validate();

 
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");
                 $randnum=rand(100,100000);
                      $user= User::where('email',$this->email)->first();
        $token = auth()->user()->createToken($randnum."-".$user->id."-".$user->email)->accessToken;
   
        $user->api_token= $token;
        $user->save();
                return redirect()->route('home');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }
}
