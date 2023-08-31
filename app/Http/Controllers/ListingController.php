<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListingController extends Controller
{
    public function  index(){
        $listings= Listing::latest()->filter(request(['tag','search']))->get();


        return view("listings.index",["listings"=>$listings]);
    }

    public function create(){
        return view("listings.create");
    }

    public function show(Listing $listing):View{

        if(!$listing){
            abort(404);
        }
        return view("listings.show",["listing"=>$listing]);
    }
    public function store(Request $request){
        dd($request->all());
    }
}
