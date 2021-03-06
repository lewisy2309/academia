<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{


    public function niveau(){
        return $this->belongsToMany('App\Niveau');
    }

    public function cours(){
        return $this->hasMany('app\Cours');
    }

    public function enonce_examen(){
        return $this->hasMany('app\Enonce_examen');
    }

}
