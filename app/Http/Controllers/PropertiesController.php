<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Property;

class PropertiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the properties lists.
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
        return view('properties/index', ['properties' => $properties ]);
    }

    /**
     * Show the properties create form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('properties/create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'square_meter' => 'required',
            'bed_nos' => 'required',
            'bath_room_nos' => 'required'
        ]);
        $keys = ['name', 'price', 'square_meter', 'sold_out', 'rent_sale', 'bed_nos', 'bath_room_nos'];
        $input = $this->createQueryInput($keys, $request);
        $input['sold_out'] = ($input['sold_out'] == NULL) ? 0 : 1;
        $input['rent_sale'] = ($input['rent_sale'] == NULL) ? 0 : 1;
        $input['type_id'] = 1;
        $input['location_id'] = 1;

        Property::create($input);

        return redirect()->intended('/properties');
    }

    /**
     * Edits a  property.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = Property::find($id);
        // Redirect to state list if updating state wasn't existed
        if ($properties == null || count($properties) == 0) {
            return redirect()->intended('/properties');
        }
        return view('properties/edit',
            [
                'properties' => $properties
            ]);
    }

    public function property($id)
    {
        $property = Property::find($id);
        // Redirect to state list if updating state wasn't existed
        if ($property == null || count($property) == 0) {
            return redirect()->intended('/properties');
        }

        return view('properties/property',
            [
                'property' => $property
            ]);
    }

    public function update(Request $request, $id)
    {
        $employee = Property::findOrFail($id);
        $keys = ['name', 'price', 'square_meter', 'sold_out', 'rent_sale', 'bed_nos', 'bath_room_nos'];
        $input = $this->createQueryInput($keys, $request);
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'square_meter' => 'required',
            'bed_nos' => 'required',
            'bath_room_nos' => 'required'
        ]);
        $input['sold_out'] = ($input['sold_out'] == NULL) ? 0 : 1;
        $input['rent_sale'] = ($input['rent_sale'] == NULL) ? 0 : 1;
        $input['type_id'] = 1;
        $input['location_id'] = 1;
        $input['slug'] = str_slug($input['name'], '-');
        Property::where('id', $id)->update($input);
        if ($request->duplicate == 2) {

            Property::create($input);
        }
        return redirect()->intended('/properties');
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
