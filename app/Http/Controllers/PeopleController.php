<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PeopleController extends Controller
{
    public function index()
    {
        // $peoples = People::all();

        // dd($peoples);

        // return view('index', compact('peoples'));
        return view('index');
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
