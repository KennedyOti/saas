@extends('dashboard.layouts.app')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
        <div>
            <h3>Your Client ID is : <b>{{Auth::user()->id}}</b></h3>
        </div>
        <div class="page-category">{!! $grid !!}</div>
    </div>
</div>
</div>
@endsection