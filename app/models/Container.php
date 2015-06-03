<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Container extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'containers';

	public function client()
	{
		return $this->belongsTo('User');
	}

	public function ship()
	{
		return $this->belongsTo('Ship');
	}

	public function harbor()
	{
		return $this->belongsTo('Harbor');
	}

}
