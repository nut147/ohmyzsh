<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function showHome() {
        return view('home');
    }
    
    function showFriend() {
        return view('friend');
    }

    function showteachingschedule() {
        return view('teaching-schedule');
    }

    function showaboutme() {
        return view('About-me');
    }
}
