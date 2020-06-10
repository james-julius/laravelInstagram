@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src=""/>
        </div>
        <div class="col-9 pt-5"></div>
            <div><h1>{{$user-> username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp</div>
            <div>We're a global community of millions of people learning to code together.</div>
    </div>
</div>
@endsection
