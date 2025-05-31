@extends('pages.layouts.panel')

@section('head')
    <title>laundryku - user address</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
@endsection

@section('body')
    @livewire('pages.users.address', ['user_id' => auth('users')->user()->user_id])
@endsection

@section('script')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8U-dPzW3SfzLdTHz9P7IfEXbiA4HZXC4&libraries=places"></script>

@endsection
