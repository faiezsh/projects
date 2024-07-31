<?php

namespace App\Http\Controllers;


use App\Models\Certificates;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    ######   chang password ####
    public function changepassword(Request $request)
    {
        try {
            User::where('id', $request->id)->update([
                'password' => bcrypt($request->password)
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'an error uccored']);
        }
        return [
            'message' => 'Updated  password successfuly !'
        ];
    }
    #####  chang name ######
    public function changename(Request $request)
    {
        try {
            User::where('id', $request->id)->update([
                'name' => $request->name
            ]);
        } catch (\Exception $e) {
            return response()->json(['massage' => 'an error unccored']);
        }

        return [
            'message' => 'Updated name successfuly !'
        ];
    }

    #####  forget password ######
    public function forgetpassword(Request $request)
    {
        try {
            $fields = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
            //Check email
            $user = User::where('email', $fields['email'])->first();
            if (!$user) {
                return response()->json(['message' => 'user email not found'], 404);
            }
            User::where('email', $request->email)->update([
                'password' => bcrypt($request->password)
            ]);
            $token = $user->createToken('token')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];
        } catch (\Exception $e) {
            return response()->json(['message' => 'an error uccured in login']);
        }
        return response($response, 200);
    }
    ########## register #########

    public function register(Request $request)
    {
        try {
            $validator = $request->validate(
                [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6',
                    'roll' => 'required|integer',
                    'age' => 'required|integer|max:100',

                ]
            );

            $user = User::create([
                'name' => $validator['name'],
                'email' => $validator['email'],
                'password' => bcrypt($validator['password']),
                'roll' => $validator['roll'],
                'age' => $validator['age']
            ]);
            $token = $user->createToken('token')->plainTextToken;
            $respons = [
                'user' => $user,
                'token' => $token
            ];
            return response($respons);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'massage' => $th->getMessage()
            ], 500);
        }
    }
    #########   login   ##########
    public function login(Request $request)
    {
        try {
            $fields = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string',
            ]);

            $user = User::where('email', $fields['email'])->first();

            //Check email
            if (!$user) {
                return response()->json(['message' => 'user email not found'], 404);
            }
            //Check pass
            if (!Hash::check($fields['password'], $user->password)) {
                return response([
                    'message' => 'password incorrect'
                ], 401);
            }

            $token = $user->createToken('token')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];
        } catch (\Exception $e) {
            return response()->json(['message' => 'an error uccured in login'], $e);
        }
        return response()->json($response, 200);
    }

    ##############profail###############
    public function profileshow($id)
    {
        try {
            $user = User::where('id', $id)->first();
            $cer = Certificates::where('userid', $user['id'])->get();
        } catch (\Exception $e) {
            return response()->json('error');
        }
        return response()->json(['profile'=>
        ['email'=>$user['email'],
        'name'=>$user['name'], 
        'rate'=>$user['rate'], 
        'roll'=>$user['roll'], 
        'age'=>$user['age'], 
        'Certificates'=>$cer]
    ]);
    }
    #######  get user ######
    public function usershow(Request $request)
    {
        try {
            if ($request->roll != 0) {
                return false;
            }
            $user = User::get();
        } catch (\Exception $e) {
            return response()->json('error');
        }
        return response()->json($user);
    }
}
