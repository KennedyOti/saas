@extends('dashboard.layouts.app')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="page-category">
            <div class="p-4 m-3 border rounded shadow">
                <table id="example" class="  display nowrap table table-hover table-striped table-bordered table-sm"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>User name</th>
                            <th>Email</th>
                            <th>Role</th>
                            @if(Auth::user()->role == 'admin')
                                <th>Edit</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            @if(Auth::user()->role == 'admin')
                                <td>
                                    <a href="{{ route('user.edit' , $user->id) }}"
                                        style="display: inline-block; padding: 10px 20px; background-color: black; color: white; font-weight: bold; border-radius: 5px; text-decoration: none;">
                                        Edit
                                    </a>
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection