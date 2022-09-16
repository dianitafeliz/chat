<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct() 
{
	$this->middleware('auth');
}	

public function sent(Request $request)
{		
    // Este método sirve para almacenar el mensaje
    $message = auth()->user()->messages()->create([
		'content' => $request->message,
		'chat_id' => $request->chat_id
	])->load('user');
	
	return $message;
}
}