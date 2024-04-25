<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        return Room::all();
    }

    public function store(RoomRequest $request)
    {
        return Room::create($request->validated());
    }

    public function show(Room $room)
    {
        return $room;
    }

    public function update(RoomRequest $request, Room $room)
    {
        $room->update($request->validated());

        return $room;
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return response()->json();
    }
}
