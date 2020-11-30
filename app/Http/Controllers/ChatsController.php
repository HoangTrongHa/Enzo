<?php

namespace App\Http\Controllers;

use App\Events\formchatsubmit;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function index()
    {
        return view('chattest');
    }


    public function fetchMessages()
    {
        return view('sender');
    }

    public function PostfetchMessages()
    {
    $text = request()->text;
        event(new formchatsubmit($text));
    }

}
