<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Exception;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    // public function index() {
    //     return view('admin.index',
    //     [

    //     ]
    //     )
    // }

    public function showUser()
    {
        // $transactions = Transaction::with(['extras'])->paginate(6);
        $users = User::paginate(5);

        foreach ($users as $user) {
            $user->roleLabel = ($user->role == 0) ? 'User' : (($user->role == 1) ? 'Admin' : 'Unknown Role');
        }

        return view('admin.user', [
            "pagetitle" => "Admin User",
            'users' => $users
        ]);
    }


    public function checkPassword()
    {
        $users = User::all();
        $check = [];

        foreach ($users as $user) {
            array_push(
                $check,
                Hash::check("Evan1", $user->password)
            );
        }
        return $check;
    }

    public function createUser(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->age = $request->age;
            $user->save();
            return [
                'status' => Response::HTTP_OK,
                'message' => "Success",
                'data' => $user
            ];
        } catch (Exception $e) {
            return [
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    public function updateUser(Request $request)
    {
        if (!empty($request->email)) {
            $user = User::where('email', $request->email)->first();
        } else {
            $user = User::where('id', $request->id)->first();
        }

        if (!empty($user)) {
            try {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->phone = $request->phone;
                $user->age = $request->age;
                $user->save();
                return [
                    'status' => Response::HTTP_OK,
                    'message' => "Success",
                    'data' => $user
                ];
            } catch (Exception $e) {
                return [
                    'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'message' => $e->getMessage(),
                    'data' => []
                ];
            }
        }

        return [
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "User not found",
            'data' => []
        ];
    }

    public function deleteUser(Request $request)
    {
        if (!empty($request->email)) {
            $user = User::where('email', $request->email)->first();
        } else {
            $user = User::where('id', $request->id)->first();
        }

        if (!empty($user)) {
            $user->delete();

            return [
                'status' => Response::HTTP_OK,
                'message' => "Success",
                'data' => []
            ];
        }

        return [
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "User not found",
            'data' => []
        ];
    }
}
