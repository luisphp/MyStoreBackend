<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 	
    protected $primaryKey = 'id_product';

    //pertenece a 1 usuario
    public function user(){

    	return $this->belongsTo(User::class, 'user_id','id_user');
    }

    //pertenece a 1 seller
    public function seller(){

    	return $this->belongsTo(Seller::class, 'seller_id','id_seller');
    }

    //Pertence a 1 categoria
    public function category(){

    	return $this->belongsTo(Category::class,'category_id','id_category');
    }

    //Campos protegidos
    protected $fillable = [

    	'created_by_id', 'category_id', 'seller_id' ,'name', 'slug', 'description', 'bullets', 'price', 'SKU', 'status', 'photo_1', 'photo_2', 'photo_3', 'stock',
    ];

}
