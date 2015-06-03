<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function login()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if($username != '' && $password != '') {
			$u = User::where('username', $username)->first();
			if($u == null)
				die('compte inexistant');
			if($u->password != $password)
				die('mauvais mot de passe');
			Session::put('logged', $u->id);
			$type = "Client";
			$tab_bateaux = null;
			if($u->type == 1){
				$type = "Entreprise";
				$c = Company::where('user_id', $u->id)->first();
				// die($c->ships);
				$tab_bateaux = $c->ships;
			}
			else if($u->type == 3){
				$type = "Employé portuaire";
						
			}
			return View::make('back', array(
					'username' => $u->username,
					"type" => $u->type,
					'type_name' => $type,
					'bateaux' => Ship::count(),
					'tab_bateaux' => $tab_bateaux,
					'tab_recent_arrivals' => Stop::all()->take(5),
				));
			// Auth::login($u);
		}

	}

	public function back() {
		
		$u = User::find(Session::get('logged'));
		$type = "Client";
		$tab_bateaux = null;
		if($u->type == 1){
			$type = "Entreprise";
			$c = Company::where('user_id', $u->id)->first();
			// die($c->ships);
			$tab_bateaux = $c->ships;
		}
		else if($u->type == 3){
			$type = "Employé portuaire";
					
		}

		return View::make('back', array(
					'username' => $u->username,
					"type" => $u->type,
					'type_name' => $type,
					'bateaux' => Ship::count(),
					'tab_bateaux' => $tab_bateaux,
					'tab_recent_arrivals' => Stop::all()->take(5),
				));
	}

}
