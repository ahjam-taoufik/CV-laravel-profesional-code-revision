<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    
   public function getOffers(){
       return Offer::select('id','name')->get();
   }

    public function createOffer(){
         Offer::create([
            'name' => 'offer1',
            'price' => '100',
            'details' => 'details1',
        ]);
        
    }







}
