@extends('layouts.admin_template')
@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h6>{{ $title ?? '' }}</h6>
        </div>
    </div>
</div>
@endsection
