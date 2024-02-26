<?php

namespace App\Livewire\User\Auth;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email
    ,$password;

    public function render()
    {
        return view('livewire.user.auth.login')->layout('layout.user-login');
    }


    public function login(){
     
        

        // $vali=$this->validate([
        //     'email'=>['required', 'string', 'email'],
        //     'password'=>['required', 'string'],
        // ]);

        $this->validate([
            'email'=>['required', 'string', 'email'],
            'password'=>['required', 'string'],
        ]);


        // dd($vali);
        

        $users = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        // dd($users);
       
    

        if($users){
            $this->email="";
            $this->password="";
            return redirect(route('users.tasks'));
        } else {
            // Authentication failed, provide feedback to the user
            $this->email="";
            $this->password=""; 
          
         
        }
        // dd('Function triggered!');
    }
}
