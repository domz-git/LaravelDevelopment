@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="/storage/{{ $post->image }}" style="width:80%; height:auto; float:right;">
        </div>

        <div class="col-6">
            <h3>{{ $post->user->username }}</h3>

            <p>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
