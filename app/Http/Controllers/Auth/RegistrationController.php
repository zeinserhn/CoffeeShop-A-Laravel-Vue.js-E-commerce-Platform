<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
 {
    public function create(){
        return inertia('Auth/Register');
    }

    public function store(Request $request)
    {
        // Validation des données d'inscription
        $this->validator($request->all())->validate();

        // Création de l'utilisateur
        $user = $this->createUser($request->all());

        // Authentification de l'utilisateur nouvellement créé
        Auth::login($user);

        return redirect()->route('home');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}






   /* public function create(){
        return inertia('Register');
    }
   public function store(){
        $this->validate(request(),[
            'name'=>'required',
            'email'=>['required','email'],
            'password'=>'required'
        ]);
        $user=User::create(['name','email','password']);
        auth()->login($user);
        return redirect()->home();
    }
    */


