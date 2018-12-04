<?php

namespace App\Http\Controllers\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Area, Category, Listing};

class ListingController extends Controller
{

    public function index(Area $area, Category $category)
    {
    	$listings = Listing::isLive()->inArea($area)->fromCategory($category)->latestFirst()->get();

    	return view('listings.index', compact('listings', 'category'));
    }
}
