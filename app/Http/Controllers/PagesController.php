<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Customer;
use App\Property;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = DB::table('properties')
            ->leftJoin('property_types', 'properties.type_id', '=', 'property_types.id')
            ->leftJoin('locations', 'properties.location_id', '=', 'locations.id')
            ->select('properties.*', 'locations.name as location', 'property_types.type as type')->get();
        ;
        return view('index', ['properties' => $properties ]);
    }

    public function apartments()
    {
        $properties = DB::table('properties')
            ->leftJoin('property_types', 'properties.type_id', '=', 'property_types.id')
            ->leftJoin('locations', 'properties.location_id', '=', 'locations.id')
            ->select('properties.*', 'locations.name as location', 'property_types.type as type')->get();
        ;
        return view('apartments', ['properties' => $properties ]);
    }

    public function apartment($slug)
    {
        $properties = DB::table('properties')
            ->leftJoin('property_types', 'properties.type_id', '=', 'property_types.id')
            ->leftJoin('locations', 'properties.location_id', '=', 'locations.id')
            ->select('properties.*', 'locations.name as location', 'property_types.type as type')
            ->where('properties.slug', "=", $slug)
            ->first();
        ;

        $allproperties = DB::table('properties')
            ->leftJoin('property_types', 'properties.type_id', '=', 'property_types.id')
            ->leftJoin('locations', 'properties.location_id', '=', 'locations.id')
            ->select('properties.*', 'locations.name as location', 'property_types.type as type')
            ->get();
        ;
        return view('house', ['properties' => $properties, 'allproperties' => $allproperties ]);
    }

    public function aboutUs()
    {
        $properties = DB::table('properties')
            ->leftJoin('property_types', 'properties.type_id', '=', 'property_types.id')
            ->leftJoin('locations', 'properties.location_id', '=', 'locations.id')
            ->select('properties.*', 'locations.name as location', 'property_types.type as type')->get();
        ;
        return view('about-us', ['properties' => $properties ]);
    }

    public function contactUs()
    {
        $properties = DB::table('properties')
            ->leftJoin('property_types', 'properties.type_id', '=', 'property_types.id')
            ->leftJoin('locations', 'properties.location_id', '=', 'locations.id')
            ->select('properties.*', 'locations.name as location', 'property_types.type as type')->get();
        ;
        return view('contact', ['properties' => $properties ]);
    }
}
