<?php namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;

class HomeController extends Controller 
{
	public function index()
	{
		return view('home');
	}

	public function privacy()
	{
		return view('public.privacy');
	}

	public function techies()
	{
		return view('public.techies');
	}

	public function contact()
	{
		return view('public.contact');
	}

	public function contactStore(MessageRequest $request)
	{
		$message = new Message;
		$message->name = $request->input('name');
		$message->email = $request->input('email');

		if(!empty($request->input('city')))
		{
			$message->city = $request->input('city');
		}
		
		$message->telephone = $request->input('telephone');
		$message->content = $request->input('content');
		$message->save();

		return \Redirect::back()->with('message', 'Reporte Enviado');
	}

}
