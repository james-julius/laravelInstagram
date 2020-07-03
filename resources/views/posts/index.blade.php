@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row mb-4">
        <div class="col-6 offset-2">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100" style="max-width: 400px; max-height: 400px;">
                </a>
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <a href="/profile/{{$post->user->id}}">
                            <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width: 40px" alt="">
                        </a>
                    </div>
                    <div>
                       <a href="/profile/{{ $post->user->id }}">
                           <span class="text-dark"><span class="font-weight-bold">{{ $post->user->username }}</span></span>
                       </a>
                    </div>
                    <div>
                        <a href="#" class="pl-3"><strong>Follow</strong></a>
                    </div>
                </div>

                <hr>

                <div>
                    <p><span class="font-weight-bold text-dark">{{ $post->user->username }}</span> {{$post->caption}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
