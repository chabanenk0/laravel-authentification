<?php 
class UserController extends BaseController {

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));

    }

    /**
     * Show the profile for the given user
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make('pages.user.profile', array('user' => $user));
    }

    public function showRegister()
    {
        return View::make('sessions.register');
    }

    public function storeRegister()
    {
        // POST
    }
}