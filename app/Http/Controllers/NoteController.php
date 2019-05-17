<?php

namespace App\Http\Controllers;

use App\Note;
use App\User;
use App\Customer;
use App\Company;
use App\Status;
use Illuminate\Http\Request;
use DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $notes = Note::where('message', 'LIKE', "%$keyword%")->orWhere('subject', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $notes = Note::latest()->paginate($perPage);
        }

        return view('admin.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleagues = User::select('id', 'first_name', 'last_name')->get();
        $colleagues = $colleagues->pluck('full_name', 'id');

        $customers = Customer::select('id', 'first_name' , 'last_name')->get();
        $customers = $customers->pluck('first_name', 'last_name');

        $companies = Company::select('id', 'name')->get();
        $companies = $companies->pluck('name');

        $statusses = Status::select('id', 'name')->get();
        $statusses = $statusses->pluck('last_name');

        return view('admin.notes.create', compact('colleagues' , 'customers', 'companies', 'statusses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}
