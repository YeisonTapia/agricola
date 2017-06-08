<?php namespace agricolacentral;

use Illuminate\Database\Eloquent\Model;

class dsc extends Model {

  protected $table = 'dsc';
  protected $fillable = ['fecha','Num_Cont', 'Actividad','val_contra','apor_se_soci','aport_volu','aport_afc','decla_renta','ingre_corr','ingre_anual'];

}
