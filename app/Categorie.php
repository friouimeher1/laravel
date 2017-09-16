<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
  protected $fillable =['nom_categorie'];


  public function produit()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(Produit::class);
    }
}
