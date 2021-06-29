<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function showHome() {
        return view('home');
    }
    
    function showFriends() {
        return view('friends');
    }

    function showTeachingschedule() {
        return view('Teachingschedule');
    }

    function showAboutme() {
        return view('Aboutme');
    }
}
