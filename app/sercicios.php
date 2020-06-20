<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sercicios extends Model
{
    public function user(){
      return $this->belongsTo(User::class); //Pertenece a una categoría.
  }
}
