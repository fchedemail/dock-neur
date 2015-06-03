<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Stop extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stops';

	public function ship()
	{
		return $this->belongsTo('Ship');
	}
	
}
