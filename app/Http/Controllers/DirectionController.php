<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use Illuminate\Http\Request;
use App\Http\Requests\Direction\DirectionCreateRequest;
use App\Http\Requests\Direction\DirectionUpdateRequest;

class DirectionController extends Controller
{
    public function index() {
        $directions = Direction::all();
        return view('pages.directions.index')->with([
            'directions' => $directions,
        ]);
    }

    public function show(Direction $direction) {
        return view('pages.directions.show')->with([
            'direction' => $direction,
        ]);
    }

    public function create() {
        return view('pages.directions.create');
    }

    public function store(DirectionCreateRequest $request) {
        $data = $request->validated();
        $direction = Direction::create($data);

        return redirect(route('directions.show', $direction));
    }

    public function edit(Direction $direction) {
        return view('pages.directions.edit')->with([
            'direction' => $direction,
        ]);
    }

    public function update(DirectionUpdateRequest $request, Direction $direction) {
        $data = $request->validated();
        $direction->fill($data);
        $direction->saveOrFail();
        return redirect(route('directions.show', $direction));
    }

    public function destoy(Direction $direction) {
        $direction->deleteOrFail();
        return redirect(route('directions.index'));
    }
}
