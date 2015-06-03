<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Movement extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'movements';

	public function stop()
	{
		return $this->belongsTo('Stop');
	}

	public function ship()
	{
		return $this->belongsTo('Ship');
	}

	public function harbord()
	{
		return $this->belongsTo('Harbor');
	}
	
}
