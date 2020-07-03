@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" style="width: 200px; max-height: 200px;" class="rounded-circle w-100 h-100" />
        </div>
        <div class="col-7 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h4>{{ $user->username }}</h4>
                    {{-- @cannot('update', $user->profile) --}}
                        <follow-button user-id={{$user->id}} follows="{{$follows}}"></follow-button>
                    {{-- @endcannot --}}
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="{{"/p/{$post->id}"}}">
                    <img src="/storage/{{$post->image}}" class="w-100 h-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
