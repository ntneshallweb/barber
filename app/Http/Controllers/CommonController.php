<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Abouts;
use App\Models\Clients;
use App\Models\Contacts;
use App\Models\Hours;
use App\Models\Prices;
use App\Models\Services;
use App\Models\Quotes;

use Illuminate\Http\Request;
use DB;

class CommonController extends Controller
{
    public function index()
    {
        $banners = Banners::where('id', 1)->first();
        $abouts = Abouts::where('id', 1)->first();
        $clients = Clients::all();
        $contacts = Contacts::all();
        $hours = Hours::all();
        $prices = Prices::all();
        $services = Services::all();
        $quotes = Quotes::all();

        return view( 'front.index', compact( 'banners', 'abouts', 'clients', 'contacts', 'hours', 'prices', 'services', 'quotes' ) );
    }
    public function index2()
    {
        $banners = Banners::where('id', 1)->first();
        $abouts = Abouts::where('id', 1)->first();
        $clients = Clients::all();
        $contacts = Contacts::all();
        $hours = Hours::all();
        $prices = Prices::all();
        $services = Services::all();
        $quotes = Quotes::all();

        return view( 'front.index2', compact( 'banners', 'abouts', 'clients', 'contacts', 'hours', 'prices', 'services', 'quotes' ) );
    }
}