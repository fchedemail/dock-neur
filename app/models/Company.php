<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Company extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'companies';
	
	public function user()
	{
		return $this->hasOne('User');
	}

	public function ships()
	{
		return $this->hasMany('Ship');
	}
}
