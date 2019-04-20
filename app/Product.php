<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 	

    //pertenece a 1 usuario
    public function user(){

    	return $this->belongsTo(User::class);
    }

    //pertenece a 1 seller
    public function seller(){

    	return $this->belongsTo(Seller::class);
    }

    //Pertence a 1 categoria
    public function category(){

    	return $this->belongsTo(Category::class);
    }

    //Campos protegidos
    protected $fillable = [

    	'created_by_id', 'category_id', 'seller_id' ,'name', 'slug', 'description', 'bullets', 'price', 'SKU', 'status', 'photo_1', 'photo_2', 'photo_3', 'stock',
    ];

}
