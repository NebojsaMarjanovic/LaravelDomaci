<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Js;

class AuthController extends Controller
{
    // public function create()
    // {
    //     return view('auth.login');
    // }
    public function login(Request $request){
if(!Auth::attempt($request->only('email', 'password'))){
return response()->json(['message'=>'Unauthorised'],404);
}
$user = User::where('email',$request['email'])->firstOrFal();
$token = $user->createToken('auth_token')->plainTextToken;
return response()->json(['message'=>'HI'.$user->name.',welcome to home','access_token'=>$token,
'token_type'=>'Bearer',]);
    }

    public function register(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','string', 'min:8'],
        ]);
if( $validator->fails()){
    return response()->json($validator->errors());
}
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'remember_token' => Hash::make($request->remember_token),
        ]);
$token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([

            'data'=>$user, 'remember_token'=>$token,'token_type'=>'Bearer',
        ]);
    }
}
