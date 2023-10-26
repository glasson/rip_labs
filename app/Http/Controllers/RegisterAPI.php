<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterAPI extends Controller
{
    public function registration (Request $request){
        try{
            // $this->validate($request, [
            //     'name' => 'required|string',
            //     'email' => 'required|email|unique:users',
            //     'password' => 'required|string|min:6',
            // ]);

            $data = $request->only(['name', 'email', 'password']);        

            if (User::where('email', $data['email'])->exists()) {
                return response()->json([], 201); 
            }
            else{
                $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);


            //     //auth()->login($user);
                return response()->json(['message' => 'Успешно'], 202);
            
            }
        }
        catch(Exception $e){
            return response()->json(['message' => 'Ошибка'], 204);
        }
        

        
    }
}
