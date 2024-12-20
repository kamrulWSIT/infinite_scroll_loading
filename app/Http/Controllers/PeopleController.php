<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PeopleController extends Controller
{
    public function index()
    {
        $persons = People::all();

        // dd($persons);

        return view('index', compact('persons'));
    }


    public function getPeoples(Request $request)
    {
        if ($request->ajax()) {
            $people = People::all();

            return DataTables::of($people)
                ->make(true);
        }

        return abort(403, 'Unauthorized action.');
    }

}
