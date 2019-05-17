@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">My Notes</div>
                    <div class="card-body">

                        {!! Form::open(['method' => 'GET', 'url' => '/my/notes', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
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
                                        <th>Subject</th>
                                        <th>Status ID</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($notes as $note)
                                    <tr>
                                        <td>{{ $note->id }}</td>
                                        <td><a href="{{ url('users/', $note->created_by) }}">{{ $note->created_by }}</a></td>
                                        <td><a href="{{ url('users/', $note->created_for) }}">{{ $note->created_for }}</a></td>
                                        <td><a href="{{ url('customers/', $note->customer_id) }}">{{ $note->customer_id }}</a></td>
                                        <td>{{ $note->subject }}</td>
                                        <td><a href="{{ url('statusses/', $note->status_id) }}">{{ $note->status_id }}</a></td>
                                        <td> {{ $note->created_at }}</td>
                                        <td>
                                            <a href="{{ url('notes/' . $note->id) }}" title="View Note"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('notes/' . $note->id . '/edit') }}" title="Edit Note"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/notes', $note->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Note',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination"> {!! $notes->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
