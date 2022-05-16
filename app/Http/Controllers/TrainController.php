<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::orderBy('in_orario', 'desc')->paginate(20);

        $data = [
            'train' => new Train(),
            'trains' => $trains
        ];
        return view('trains.index', $data);
    }
}
