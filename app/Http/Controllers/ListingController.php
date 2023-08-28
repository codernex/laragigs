<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListingController extends Controller
{
    public function  index(){
        $listings= Listing::all();

        return view("listing.index",["listings"=>]);
    }

    public function show(Listing $listing):View{
        return view("listing.show",["listing"=>$listing]);
    }
}
