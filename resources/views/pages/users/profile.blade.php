@extends('pages.layouts.panel')

@section('head')
    <title>laundryku - user account</title>
    <style>
        #navAccordion .nav-link.active{
            color: #ff4a4a;
        }
        .image-upload{
            width: 100px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('body')
    <div class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-3 d-none d-lg-block">
                    @include('pages.users.menu')
                </div>

                <div class="col-12 col-lg-9">
                    @livewire('pages.users.profile', ['postId' => auth('users')->user()->user_id])
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
