<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        //Get user notification
        $data = auth()->user()->notifications;
        return view('notifications.show', compact('data'));
    }
}
