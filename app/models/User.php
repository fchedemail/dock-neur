<?php

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	const TYPE_COMPANY = 1;
	const TYPE_CLIENT = 2;
	const TYPE_HARBOR = 3;

}
