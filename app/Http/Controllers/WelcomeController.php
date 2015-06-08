<?php namespace App\Http\Controllers;
use DB;
use Cache;
use Session;
use Laravel_helpers;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function index()
    {
        return view('welcome');
    }

    public function testCache()
    {
        if(Session::has('Clients')){
            $data = Session::get('Clients');
            echo 'with session';
        } else {
            $data = cacheQuery("SELECT * FROM oauth_clients WHERE `id` > 0", 30);
            Session::put('Clients',$data);
            echo 'without session';
        }
        var_dump($data);
    }

}
