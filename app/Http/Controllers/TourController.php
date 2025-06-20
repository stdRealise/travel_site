<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Requests\Tour\TourCreateRequest;
use App\Http\Requests\Tour\TourUpdateRequest;

class TourController extends Controller
{
    public function index() {
        $tours = Tour::all();
        return view('pages.tours.index')->with([
            'tours' => $tours,
        ]);
    }

    public function show(Tour $tour) {
        return view('pages.tours.show')->with([
            'tour' => $tour,
        ]);
    }

    public function create() {
        return view('pages.tours.create');
    }

    public function store(TourCreateRequest $request) {
        $data = $request->validated();
        $tour = Tour::create($data);

        return redirect(route('tours.show', $tour));
    }

    public function edit(Tour $tour) {
        return view('pages.tours.edit')->with([
            'tour' => $tour,
        ]);
    }

    public function update(TourUpdateRequest $request, Tour $tour) {
        $data = $request->validated();
        $tour->fill($data);
        $tour->saveOrFail();
        return redirect(route('tours.show', $tour));
    }

    public function destroy(Tour $tour) {
        $tour->deleteOrFail();
        return redirect(route('tours.index'));
    }
}
