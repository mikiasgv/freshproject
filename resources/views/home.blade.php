@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <div>
            @include('_sidebar-links')
        </div>
        <div class="flex-fill px-3">
            @include('_publish-tweet-panel')

            @foreach($tweets as $tweet)
            @include('_tweet')
            @endforeach
        </div>
        <div>
            @include('_friends-list')
        </div>
    </div>
</div>
@endsection
