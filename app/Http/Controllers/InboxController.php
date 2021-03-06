<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objective;
use App\Edoc;
use File;
use PDF;

class InboxController extends Controller
{
    public function index()
    {
        $edocs = Edoc::with('tbobjective')->get();
        return view('inbox.index',['edocs' => $edocs]);
    }

    public function create()
    {
        return view('inbox.create');
    }

    public function addcreate()
    {
        $goals = Objective::select('id','name')->get();
        return view('inbox.add',['goals' => $goals]);
    }

    public function addstore(Request $request)
    {

        $edoc = new Edoc;
        $edoc->booknum = $request->booknum;
        $edoc->date = $request->date;
        $edoc->position = $request->position;
        $edoc->objective_id = $request->objective_id;
        $edoc->topic = $request->topic;

        if ($request->hasFile('file')){
            File::delete(base_path().'\\public\\edocfiles\\'.$edoc->file);
            $file = str_random(10).'.'.$request->file('file')->getClientOriginalExtension();
            // $file = $request->file('file')->getClientOriginalExtension();
            // $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(base_path().'/public/edocfiles/',$file);
            $edoc->file = $file;
        }

        $edoc->save();

        return redirect()->route('inbox.index');
    }

    public function show($id)
    {
        // $data = Edoc::find($id);
        $data = Edoc::with('tbobjective')->find($id);
        $data2 = [  'booknum' => $data->booknum,
                    'date' => $data->date,
                    'topic' => $data->topic,
                    'position' => $data->position,
                    'name' => $data->tbobjective->name
                    ];
                    
        $pdf = PDF::loadView('myPDF', $data2);

        return $pdf->stream();
    }
}
