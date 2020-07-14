@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img src="https://th.bing.com/th/id/OIP.lCLK-kz30rnOxtm0vr16lgHaHa?pid=Api&rs=1" class="rounded-circle h-75 w-75">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>0</strong> posts</div>
                <div class="pr-5"><strong>0</strong> followers</div>
                <div class="pr-5"><strong>0</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4 ">
            <img src="https://thumbs.dreamstime.com/x/builder-551539.jpg" class="w-50 h-75">
        </div>
        <div class="col-4">
            <img src="https://thumbs.dreamstime.com/x/builder-551539.jpg" class="w-50 h-75">
        </div>
        <div class="col-4">
            <img src="https://thumbs.dreamstime.com/x/builder-551539.jpg" class="w-50 h-75">
        </div>
    </div>
</div>
@endsection
