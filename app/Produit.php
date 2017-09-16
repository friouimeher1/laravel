<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
  protected $fillable=['nom','description','prix','categorie_id','image'];

 public function categorie(){
   return $this->belongsTo(Categorie::class);
 }
 public function customers(){
   return $this->belongsToMany(Customer::class,'produit_customer');
 }

}
