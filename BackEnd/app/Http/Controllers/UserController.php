<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function register(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' =>  ['required','numeric','digits:10'],

            'password' => [
                'required',
                'min:4'
            ],
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $postArray = [
            'full_name'  => $request->full_name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'phone'     => $request->phone,
            'remember_token' => $request->token,
            'address' => $request->address,
            'created_at'=> now(),
        ];


        $user = User::create($postArray);
        return Response()->json(array("success"=> 1,"data"=>$postArray,"status"=>200 ));

    }
}
