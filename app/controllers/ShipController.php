<?php

class ShipController extends BaseController {


	public function show($id)
	{
		return View::make('ships.show', array(
			'ship' => Ship::find($id),
		));
	}

	public function create()
	{	
		return View::make('ships.create', array(
			'tab_companies' => Company::all(),
		));
	}

	public function listing()
	{
		return View::make('ships.list', array(
			'tab_ships' => Ship::all()
		));
	}

	public function store()
	{
		$name = Input::get('name');
		$capacity = Input::get('capacity');
		$company = (int) Input::get('company')[0];

		if($name != '' && $capacity != '' && $company != null) {
			$s = new Ship();
			$s->name = $name;
			$s->capacity = $capacity;
			$s->company_id = $company;
			$s->save();
		}

		return Redirect::to('/back');
	}

}
