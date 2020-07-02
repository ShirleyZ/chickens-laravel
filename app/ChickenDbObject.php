<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChickenDbObject extends Model
{
  // Defaults to looking for the `chickens` database
	// But if we wanted to explicitly set, it would look like this
	/**
     * The table associated with the model.
     *
     * @var string
     */
  protected $table = 'chickens';

  public function owner() {
  	return $this->belongsTo('App\User');
  }
}
