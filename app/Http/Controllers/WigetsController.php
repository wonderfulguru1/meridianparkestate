<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Location;
use App\PropertyType;

class WigetsController extends Controller
{

    public function __construct()
    {
    }

    public function locations()
    {
        return view('wigets/locations');
    }

    public function getLocations()
    {
        $locations = Location::all();
        $response = $locations;
        return response()->json($response);
    }

    public function createLocation(Request $request)
    {
        $keys = ['name'];
        $input = $this->createQueryInput($keys, $request);
        Location::create($input);
        return response()->json('Record Save');
    }

    public function updateLocation(Request $request)
    {
        $keys = ['name', 'id'];
        $input = $this->createQueryInput($keys, $request);
        Location::where('id', $input['id'])->update($input);
        return response()->json('Record Update successfully');
    }

    //Showing property type page
    public function propertyType()
    {
        return view('wigets/property-types');
    }

    //Get list of property types
    public function getPropertyType()
    {
        $propertyType = PropertyType::all();
        $response = $propertyType;
        return response()->json($response);
    }

    //Creates a new property type
    public function createPropertyType(Request $request)
    {
        $keys = ['type'];
        $input = $this->createQueryInput($keys, $request);
        PropertyType::create($input);
        return response()->json('Record Save');
    }

    //Updates a property type
    public function updatePropertyType(Request $request)
    {
        $keys = ['type', 'id'];
        $input = $this->createQueryInput($keys, $request);
        PropertyType::where('id', $input['id'])->update($input);
        return response()->json('Record Update successfully');
    }

    private function createQueryInput($keys, $request)
    {
        $queryInput = [];
        for ($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
}
