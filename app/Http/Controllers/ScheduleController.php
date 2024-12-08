<?php
// paayos nga netong page guys, kung ano ano na nangyari, sisihin nyo si michael T.Y.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; //para maimport ang model ng Room
use App\Models\Building;
use App\Models\Schedule;
use App\Models\Section;

class ScheduleController extends Controller
{
    public function index(Schedule $schedule)
    {
        return view('programhead.schedule.sched.sched', compact('schedule'));
    }

    public function showSchedule(Room $room, Building $building){
        $building = Building::findOrFail($building->id);
        $rooms = Room::where('building_id', $building->id)->latest()->get('name');

        return view('admin.building.components.showrooms')->with([
            'building' => $building,
            'rooms' => $rooms,
        ]);
        // ello, di pa to yon
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->to('programhead/schedule/blk'); // mali pa yung redirection neto, wala pa yung page para sa may schedule
    }



}
