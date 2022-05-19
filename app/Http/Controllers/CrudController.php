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
        
       return view('create');

    }

    public function storeOffer(Request $request){
          
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'details' => 'required',
        ]);
        

        Offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
        ]);

        return redirect()->route('listoffers');
    
    }







}
