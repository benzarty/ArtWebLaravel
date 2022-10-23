<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $fields=$request->validate([
            'email'=> 'required|string',
            'password'=>'required'
        ]);

        // Check email
        $user = User::where('email',$fields['email'])->first();

        // Check user / password / statuts user !
        if (!$user || !Hash::check($fields['password'], $user->password) ) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('api_token')->plainTextToken;

        $company = CompanyController::getCompany();
        $response = [

            'user' => $user,

            'token' => $token
        ];

        return response($response, 201);

        // return redirect('welcome');
    }


}
