<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table='offers';
    protected $fillable = [  
        'name',
        'price',
        'details',
    ];
    protected $hidden = [ //dont show in get
        'created_at',
        'updated_at',
    ];

    public $timestamps = false; //d'ont save in database

}
