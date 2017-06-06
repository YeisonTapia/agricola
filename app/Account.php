<?php namespace agricolacentral;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	protected $table = 'accounts';
	protected $fillable = ['date','client_id','details','price'];

	public function client()
    {
        return $this->belongsTo('\agricolacentral\Client');
    }
}
