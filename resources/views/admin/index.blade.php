@extends('admin.layouts.default')
@section('title', 'Admin Page')
@section('name_feature', 'Overview')
@section('content')
    <div class="container-fluid">
        <router-view></router-view>
    </div>
@endsection
