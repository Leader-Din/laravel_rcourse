<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ListUserResource;
use App\Http\Resources\ShowUserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::with('roles')->get();
        $users = User::all();
        $users = ListUserResource::collection($users);
        return response()->json([
            "message" => "List User Successfully",
            "data" => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::store($request);

        return response()->json([
            'message' => 'Create user Successfully',
            'data' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $user = new ShowUserResource($user);
        return response()->json([
            "message" => "List User Successfully",
            "data" => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::store($request, $id);

        return response()->json([
            'message' => 'Create user Successfully',
            'data' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id); // Will throw 404 if not found
        if (!$user) {
            return response()->json([
                'message' => 'User not found',
                'data' => false
            ]);
        }

        $user->roles()->detach(); // Remove all role relationships
        $user->delete();          // Delete the user

        return response()->json([
            'message' => 'Delete User Successfully',
            'data' => true
        ]);
    }
}
