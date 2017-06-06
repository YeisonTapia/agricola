<?php namespace agricolacentral;

use Illuminate\Database\Eloquent\Model;


class City extends Model {

	protected $table = 'cities';
	protected $fillable = ['namedecity','depart_id'];

	public function depart()
    {
        return $this->belongsTo('\agricolacentral\Depart');
    }

    public function clients()
    {
        return $this->hasMany('\agricolacentral\Client');
    }

}
