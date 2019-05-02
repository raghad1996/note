<?php

namespace App\Http\Controllers;

use App\Note;
use DB;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('notes')
                ->latest()
                ->get();        
        return view('note.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
         $validatedData= $request->validate([
            'title' => 'required',
            'description' => 'required',
                ]);

        if(!$validatedData) {
            return redirect()->back();
        }

        $notes=new Note();
        $notes->title=request('title');
        $notes->description=request('description');
        $notes->save();
       
       return redirect('/notes')->with('success','added successfuly');   
    }


    
    }
