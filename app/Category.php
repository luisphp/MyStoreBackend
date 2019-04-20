<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    //1 Categoria tiene N cantidad de Posts
    public function products(){

    	return $this->hasMany(Product::class);

    }



    //Campos protegidos
    protected $fillable = [

    	'name', 'description', 'status', 'slug',
    ];

}
