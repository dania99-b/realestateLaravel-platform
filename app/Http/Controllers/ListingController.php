<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        
        $listings = $listings->map(function ($listing) {
            return [
                'id' => $listing->id,
                'title' => $listing->title,
                'price' => $listing->price,
                'views' => $listing->views,
                'source' => 'laravel'
            ];
        });

        return response()->json($listings);
    }
}
