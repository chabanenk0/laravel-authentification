<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$rules = array(
	        'email'    => array('required', 'email'),
	        'password' => array('required', 'min:7')
	    );

	    $validation = Validator::make($input, $rules);

	    if ($validation->fails())
	    {
	        // Validation has failed.
	       	return Redirect::back()->with(array('message' => 'Something went wrong with the validation.', 'alert-class'=>'alert-danger'))->withInput()->withErrors($validation);
	    }

	    // Validation has succeeded. Create new user.

		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password']
		]);

		// Login successful
		if($attempt) return Redirect::intended('/')->with(array('message' => 'You have been logged in.', 'alert-class'=>'alert-success'));

		// else
		return Redirect::back()->with(array('message' => 'Invalid credentials.', 'alert-class'=>'alert-danger'))->withInput();
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home()->with(array('message' => 'You have been logged out.', 'alert-class'=>'alert-success'));
	}

}