<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    public function sercicios(){
      return $this->belongsTo(sercicios::class); //Pertenece a una categoría.
  }
}
