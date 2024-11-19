<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Building;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class BuildingController extends Controller
{
    // create building

    public function store(Request $request) {

        $buildings = new Building();
        $buildings->name = $request->get('name');
        $buildings->description = $request->get('description');
        $buildings->save();

        return Redirect::to('/admin/building');
    }

    public function index()
    {
        $building = Building::get();
        return $building;
    }

    public function destroy(Building $building)
    {
        // $buildingTarg = Building::where('id','==',$building)->get('id');
        // return Redirect::to('/admin/building');
        // DB::statement('PRAGMA foreign_keys = OFF;');

        $building -> delete();
        return Redirect::to('/admin/building');
    }

    public function update(Request $request, $id)
    {
        // $name = $request->get('name');
        // $description = $request->get('description');
        
        $buildings = Building::findOrFail($id);

        $buildings->update([
        $buildings->name = $request->get('name'),
        $buildings->description = $request->get('description'),
        ]);

        $buildings->save();
        return Redirect::to('/admin/building');
    }
}