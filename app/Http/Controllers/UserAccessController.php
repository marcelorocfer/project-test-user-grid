<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserAccessController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->with('access')->paginate(6000);

        return UserResource::collection($users);
    }

    public function currentUser()
    {
        return Auth::user();
    }

}
