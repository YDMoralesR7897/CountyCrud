<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class CrudController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return response(
            [
                'users' => $users
            ]
        );
    }
}
