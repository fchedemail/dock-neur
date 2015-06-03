<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Ship extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ships';

	public function company()
	{
		return $this->belongsTo('Company');
	}

	public function __toString()
	{
		return "Nom :  "  . $this->name .  " - Capacité : " . $this->capacity;
	}
	
}
