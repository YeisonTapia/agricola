<?php namespace agricolacentral;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model {

	 protected $table = 'departs';
	 protected $fillable = ['namedepart'];


	public function cities()
    {
        return $this->hasMany('\agricolacentral\City');
    }

    public function clients()
    {
        return $this->hasMany('\agricolacentral\Client');
    }


}
