<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show All Listings
    public function index() {
        // dd(request());
        // dd(request()->tag);
        // dd(request('tag'));
        return view('listings.index', [
           
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    //show single listing
    public function show(Listing $listing) {
        return view('listings.show' , [
            'listing' => $listing
        ]);
    }
}
