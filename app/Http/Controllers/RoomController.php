<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->paginate(5);
        return view('rooms.Index', compact('rooms'))
        ->with('i', (request()->input('page',1) - 1) * 5);
    }


    public function create()
    {
        return view('rooms.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index')
        ->with('success', 'Room created successful!');
    }


    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));
    }


    public function edit(Room $room)
    {
        return view('rooms.edit',compact('room'));
    }


    public function update(Request $request, Room $room)
    {
        $request->validate([

        ]);
        $room->update($request->all());
        return redirect()->route('rooms.index')
        ->with('success', 'Room updated successful!');

    }


    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')
        ->with('success', 'Room deleted successful!');
    }
}
