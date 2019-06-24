<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    

    protected $primaryKey = 'id_campaign';
   



    //Campos protegidos
    protected $fillable = [

    	'name', 'description', 'status', 'slug','banner_1','banner_2','banner_3'
    ];

}
