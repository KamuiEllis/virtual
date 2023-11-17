<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    //
    public function zones(Request $request) {
        $zones = Zone::orderBy("id","desc")->get();
        return view("zones", ['zones' => $zones]);
    }

    public function addZone(Request $request) {
       
        $inputs = $request->validate([
            'address' => ['required'],
            'courier' => ['required'],
            'price' => ['required'],
            'type' => ['required'],
            'parish' => ['required'],
            'services' => ['required'],
            'perPound' => ['required'],
        ]);


        Zone::create($inputs);

        return redirect('/addZone')->with('success', 'Zone has been added to system');
    }

    public function getZone(Zone $zone) {
        return view('singleZone', ['zone'=> $zone]);
    }

    public function editZone(Zone $zone, Request $request) {

        $inputs = $request->validate([
            'address' => ['required'],
            'courier' => ['required'],
            'price' => ['required'],
            'type' => ['required'],
            'parish' => ['required'],
            'services' => ['required'],
            'perPound' => ['required'],
        ]);


        $zone->update($inputs);

        return redirect('/zones/'.$zone->id )->with('success', 'Zone has been edited!');
    }

    public function deleteZone (Zone $zone) {
        $zone->delete();
        return redirect('/zones')->with('success', 'Zone has been deleted!');
    }

}
