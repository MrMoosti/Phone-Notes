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
        $customers = $customers->pluck('full_name', 'id');

        $companies = Company::select('id', 'name')->get();
        $companies = $companies->pluck('name', 'id');

        $statusses = Status::select('id', 'name')->get();
        $statusses = $statusses->pluck('name', 'id');

        return view('admin.notes.create', compact('colleagues' , 'customers', 'companies', 'statusses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $data = $this->validate(
            $request,
            [
                'created_by' => 'required',
                'created_for' => 'required',
                'customer_id' => 'required',
                'company_id' => 'required',
                'subject' => 'required|string|min:2|max:65',
                'phonenumber' => 'required|string|min:2|max:20',
                'message' => 'required|string|min:2|max:250',
                'status_id' => 'required'

            ]
        );

        $note = Note::create($data);

        return redirect('/notes')->with('flash_message', 'Note added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);

        return view('admin.notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {

        $note = Note::findOrFail($id);

        $colleagues = User::select('id', 'first_name', 'last_name')->get();
        $colleagues = $colleagues->pluck('full_name', 'id');

        $customers = Customer::select('id', 'first_name' , 'last_name')->get();
        $customers = $customers->pluck('full_name', 'id');

        $companies = Company::select('id', 'name')->get();
        $companies = $companies->pluck('name', 'id');

        $statusses = Status::select('id', 'name')->get();
        $statusses = $statusses->pluck('name', 'id');

        return view('admin.notes.edit', compact('note','colleagues' , 'customers', 'companies', 'statusses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int      $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate(
            $request,
            [
                'created_by' => 'required',
                'created_for' => 'required',
                'customer_id' => 'required',
                'company_id' => 'required',
                'subject' => 'string|min:2|max:65',
                'phonenumber' => 'string|min:2|max:20',
                'message' => 'string|min:2|max:250',
                'status_id' => 'required'

            ]
        );

        $note = Note::findOrFail($id);
        $note->update($data);

        return redirect('/notes')->with('flash_message', 'Note updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Note::destroy($id);

        return redirect('/notes')->with('flash_message', 'Note deleted!');
    }
}
