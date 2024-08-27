<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Đảm bảo rằng bạn đã nhập đúng mô hình Users

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('backend.users', ['data' => $data]);
    }
    
}
