<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
      //1 Categoria tiene N cantidad de Posts
    public function products(){

    	return $this->hasMany(Product::class);

    }



    //Campos protegidos
    protected $fillable = [

    	'name', 'email', 'commercial_name', 'slug', 'description', 'rif', 'address', 'manager', 'phone_number', 'status', 'bank_account', 'company_logo',
    ];
}
