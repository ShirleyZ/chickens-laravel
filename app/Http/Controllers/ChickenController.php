<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\ChickenDbObject;

class ChickenController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
    		$chicken = ChickenDbObject::findOrFail($id);
    		$owner = ChickenDbObject::where('id', $id)
    			->addSelect([
	    			'owner_id' => User::select('name')
	    				->whereColumn('id', 'chickens.owner_id')
	    				// first arg: local, second arg: external table name
	    		])
	    		->get();

        return view('chicken.profile', [
        	'chicken' => $chicken,
        	'owner' => $owner
        ]);
    }

    /**
     * Have an interaction with the chicken specified
     *
     * @param  int  $id
     * @return View
     */
    public function bok($id)
    {
            $chicken = ChickenDbObject::findOrFail($id);
            $owner = ChickenDbObject::where('id', $id)
                ->addSelect([
                    'owner_id' => User::select('name')
                        ->whereColumn('id', 'chickens.owner_id')
                        // first arg: local, second arg: external table name
                ])
                ->get();

        return view('chicken.profile', [
            'chicken' => $chicken,
            'owner' => $owner
        ]);
    }

    /**
     * The chickens demand a fee
     *
     * @param  int  $id
     * @return View
     */
    public function fee()
    {
        $fee_method = "food";
        return view('chicken.fee', [
            'fee_method' => $fee_method
        ]);
    }
}