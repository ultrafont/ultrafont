<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MessageRequest extends Request 
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name' => 'required|max:100',
			'email' => 'required|email|max:60',
			'city' => 'required|max:100',
			'telephone' => 'numeric',
            'content'=>'required|max:2000'
		];
	}

}
