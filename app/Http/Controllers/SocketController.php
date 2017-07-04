<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LRedis;

class SocketController extends AbstractController
{
    public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('socket');
	}

	public function writemessage()
	{
		return view('send');
	}

	public function sendMessage(Request $request){
		$redis = LRedis::connection();
		$redis->publish('message', $request->message);

		return redirect('writemessage');
	}
}
