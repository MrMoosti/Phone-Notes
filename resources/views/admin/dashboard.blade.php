@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Thank you for logging in! <br>{{Auth::user()->first_name . " " . Auth::user()->last_name}}, welcome to the dashboard page.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
