<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::find(1);
        // $user = $user->roles()->sync([1,2]);
        // return "Success";

        // $users = User::with('roles')->get();
        // return $users;

        $roles = Role::with('users')->get();
        return $roles;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
