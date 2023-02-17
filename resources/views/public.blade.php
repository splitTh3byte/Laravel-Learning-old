@extends('layouts.welcome_layout')




@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">
                            <h2>Statistics of Users</h2>
                            <ul class="list-group">
                                <li class="list-group-item">The number of all users is  <b>{{ $users}}</b></li>
                                <li class="list-group-item">The number of users that have 18+ years: <b>{{$age}}</b></li>
                                <li class="list-group-item">The number of male is <b>{{ $male}}</b> vs female <b>{{ $female}}</b></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>

    @endsection


