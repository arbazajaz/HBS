<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller {
    public function index() {
        $halls = Hall::all();
        return view('halls.index', compact('halls'));
    }

    public function show($id) {
        $hall = Hall::findOrFail($id);
        return view('halls.show', compact('hall'));
    }
}