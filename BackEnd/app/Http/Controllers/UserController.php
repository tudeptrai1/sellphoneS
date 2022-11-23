<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $request->validate([
                'email'    => 'required',
                'password' => 'required'
            ],
                [
                    'email.required'    => 'Bạn phải nhập email vào',
                    'password.required' => 'Bạn phải nhập password vào',
                ]);
            $user = User::where('email', $request->email)->first();
            if (!Hash::check($request->password, $user->password)) {
                throw new \Exception('Error in password');
            }
            $tokenResult = $user->createToken('authToken', ['server:update'])->plainTextToken;
            return response()->json([
                'request'      => $request->email,
                'user'         => $user,
                'status_code'  => 200,
                'access_token' => $tokenResult,
                'token_type'   => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'email'       => $request->email,
                'status_code' => 302,
                'message'     => 'Bad request',
                'error'       => $error->getMessage(),
            ]);
        }

    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        $accessToken = $request->bearerToken();
        return response()->json($request);
    }

    public function index(){
        $users = User::all();
        foreach ($users as $user){
            $total_order = Order::whereUserId($user->id)->count();
            $user->total = $total_order;
        }


      return view('admin.user.index',[
          'users' => $users,
      ]);
    }
    public function destroy(User $id){
        $deleted = User::where('id', $id->id)->delete();
        return back()->with('message','Delete Successfully');


    }
}
