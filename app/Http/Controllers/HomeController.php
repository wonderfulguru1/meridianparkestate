<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Customer;
use App\Property;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); //get newly created users
        $customers = Customer::all(); //get newly created customers
        $properties = Property::all(); //get newly created properties

        return view('index',
            [
                'users' => $users,
                'customers' => $customers,
                'properties' => $properties
            ]
        );
    }
}
