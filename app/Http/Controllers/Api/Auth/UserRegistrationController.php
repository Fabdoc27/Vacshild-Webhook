<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'nid' => ['required', 'numeric'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'min:6'],
        ]);

        $user = User::updateOrCreate(
            ['email' => $data['email']],
            [
                'name' => $data['name'],
                'nid' => $data['nid'],
                'phone' => $data['phone'],
                'password' => $data['password'],
            ]
        );

        $isNewUser = $user->wasRecentlyCreated;

        return response()->json([
            'success' => true,
            'message' => $isNewUser ? 'User registered successfully' : 'User already exists',
        ], $isNewUser ? 201 : 200);
    }
}
