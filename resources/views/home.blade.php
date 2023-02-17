@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users in Table</div>
                    @if(session('success'))
                        <div class="alert alert-success" id="id">
                            {{session('success')}}
                            @endif
                    <div class="panel-body">
                        <h2>Users</h2>
                        <p>Here we have all users.</p>
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#addUserModal"
                                style="float: right">Add User
                        </button>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>

                                    <td id="{{$user->id}}">{{$user->name}}</td>
                                    <td>{{$user->birthdate}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#editUsersModal" id="{{$user->id}}'">Edit
                                        </button>

                                        <button class="btn btn-danger"  data-toggle="modal" data-target="#confirm-delete">
                                            Delete record {{$user->id}}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addUserModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Users</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/insert" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                       name="email">
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="control-label col-sm-2" for="firstname">Firstname</label>
                            <div class="col-sm-10">
                                <input type="firstname" class="form-control" id="" placeholder="Enter firstname"
                                       name="firstname">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lastname">Lastname</label>
                            <div class="col-sm-10">
                                <input type="lastname" class="form-control" id="last" placeholder="Enter lastname"
                                       name="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                       name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="gender">Gender:</label>
                            <div class="col-sm-10">
                                <input type="gender" class="form-control" id="gender"
                                       placeholder="Enter Gender(1-male/0-female" name="gender">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="birth">Date of Birth:</label>
                            <div class="col-sm-10">
                                <input type="birth" class="form-control" id="birth"
                                       placeholder="Enter your birthday: (Y-m-d)" name="birth">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>

                        </div>
                    </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="editUsersModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit User</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/edit/{{$user->id}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Email"
                                       name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="firstname">Firstname</label>
                            <div class="col-sm-10">
                                <input type="firstname" class="form-control" placeholder="Firstname"
                                       name="firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lastname">Lastname</label>
                            <div class="col-sm-10">
                                <input type="lastname" class="form-control" placeholder="Lastname"
                                       name="lastname">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Confirm delete
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" action="/delete/{{$user->id}}" method="post">
                            {{ csrf_field() }}
                            <h4>Do you really want to delete this?</h4>

                            <button type="submit" class="btn btn-danger">Yes DO IT !</button>

                    <form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>


@endsection
