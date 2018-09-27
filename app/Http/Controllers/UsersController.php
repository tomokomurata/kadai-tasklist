<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
   public function index()
    {
        $users = User::paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    public function show($id)
    {
        $tasklists = $user->tasklists()->orderBy('created_at', 'desc')->paginate(10);
        $user = User::find($id);
        
        $data = [
            'user' => $user,
            'tasklists' => $tasklists,
        ];

        return view('users.show', $data);
    }
}
