<?php

namespace App\Http\Controllers;

use App\Status;
use App\Company;
use Illuminate\Http\Request;

class StatusController extends Controller
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
            $statusses = Status::where('name', 'LIKE', "%$keyword%")->latest()->paginate($perPage);
        } else {
            $statusses = Status::latest()->paginate($perPage);
        }

        return view('admin.statusses.index', compact('statusses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::select('id', 'name')->get();
        $companies = $companies->pluck('name', 'id');

        return view('admin.statusses.create', compact('companies'));
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
                'name' => 'required|string|max:30'
            ]
        );

        $status = Status::create($data);

        return redirect('/statusses')->with('flash_message', 'Status added!');
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
        $status = Status::findOrFail($id);

        return view('admin.statusses.show', compact('status'));
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

        $status = Status::findOrFail($id);

        return view('admin.statusses.edit', compact('status'));
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
                'name' => 'string|max:30|min:1'
            ]
        );

        $status = Status::findOrFail($id);
        $status->update($data);

        return redirect('/statusses')->with('flash_message', 'Status updated!');
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
        Status::destroy($id);

        return redirect('/statusses')->with('flash_message', 'Status deleted!');
    }
}
