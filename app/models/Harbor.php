<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Harbor extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'harbors';

	public function user()
	{
		return $this->hasOne('User');
	}
	
}
