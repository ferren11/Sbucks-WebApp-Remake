<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    // public function index($userID = 'US000001') {
    //     // return certain user
    //     $user = User::where('userID', $userID)->firstOrFail();

    //     // display greeting according to actual time
    //     date_default_timezone_set('Asia/Jakarta');
    //     $currentTime = date('H');

    //     $greeting = '';
    //     if ($currentTime >= 5 && $currentTime < 12) {
    //         $greeting = 'Good Morning';
    //     } elseif ($currentTime >= 12 && $currentTime < 18) {
    //         $greeting = 'Good Afternoon';
    //     } else {
    //         $greeting = 'Good Evening';
    //     };

    //     return view('layouts.app', ['greeting' => $greeting, 'user' => $user]);
    // }
}
