@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">My Notes</div>
                    <div class="card-body">

                        <a href="{{ url('/my/notes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('my/notes/' . $note->id . '/edit') }}" title="Edit Note"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'url' => ['/my/notes', $note->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Note',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Created by</th>
                                        <th>Created for</th>
                                        <th>Customer ID</th>
                                        <th>Company ID</th>
                                        <th>Subject</th>
                                        <th>Status ID</th>
                                        <th>Phonenumber</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $note->id }}</td>
                                        <td><a href="{{ url('users/', $note->created_by) }}">{{ $note->created_by }}</a></td>
                                        <td><a href="{{ url('users/', $note->created_for) }}">{{ $note->created_for }}</a></td>
                                        <td><a href="{{ url('customers/', $note->customer_id) }}">{{ $note->customer_id }}</a></td>
                                        <td><a href="{{ url('companies/', $note->company_id) }}">{{ $note->company_id }}</a></td>
                                        <td>{{ $note->subject }}</td>
                                        <td><a href="{{ url('statusses/', $note->status_id) }}">{{ $note->status_id }}</a></td>
                                        <td> {{ $note->phonenumber }}</td>
                                        <td> {{ $note->message }}</td>
                                        <td> {{ $note->created_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
