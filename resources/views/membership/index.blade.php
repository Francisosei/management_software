@extends('layouts.app')

@section('content')

<div id="main">


    <div class="row-fluid">
        <div class="span12">
            <div class="box">
                <div class="box-title">
                    <h3>
                        <i class="icon-reorder"></i>
                        REGISTERED MEMBERS
                        
                    </h3>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <div class="box box-color box-bordered">
                            <div class="box-content nopadding">
                                <table class="table table-nomargin dataTable table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th class='hidden-350'>Contact</th>
                                            <th class='hidden-1024'>Profession</th>
                                            <th class='hidden-480'>Birthdate</th>
                                            <th class='hidden-480'>Gender</th>
<th class='hidden-480'>Action</th>
                                        </tr>
                                    </thead>

                                    @foreach($users as $user)
                                    <tbody>
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->profile->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td class='hidden-350'>{{$user->profile->contact}}</td>
                                            <td class='hidden-1024'>{{$user->profile->profession}}</td>
                                            <td class='hidden-480'>{{$user->birthdate}}</td>
                                            <td class='hidden-480'>{{$user->gender}}</td>
                                            <td ><Form::open(['action' => ['UserController@destroy', "id"=>$user->id], 'method' => 'DELETE', 'style' => 'display: inline;' class=""></form>
                                                <button title="Delete this" type="submit" onclick="return confirm('Are you sure want to delete this record')" class="btn btn-danger btn-sm">Delete</button>
                                        </tr>

                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div






@endsection