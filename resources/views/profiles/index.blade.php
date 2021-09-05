@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row" style="padding-bottom:20px;">
       <div class="col-3">
            <img src="/img/img.jpg" style="width:100%; height:auto;">
       </div>
       <div class="col-9">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add new post</a>
                </div>
            </div>
            <div class="d-flex">
                <div style="padding-right: 25px;"><strong>153</strong> posts</div>
                <div style="padding-right: 25px;"><strong>23k</strong> followers</div>
                <div style="padding-right: 25px;"><strong>75</strong> following</div>
            </div>
            <div style="padding-top: 20px;"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><strong><a href="">{{ $user->profile->url }}</a></strong></div>
       </div>
   </div>

   <div class="row" style="padding-top:20px;">
       <div class="col-4"><img src="/img/img.jpg" style="width:100%; height:auto;"></div>
       <div class="col-4"><img src="/img/img.jpg" style="width:100%; height:auto;"></div>
       <div class="col-4"><img src="/img/img.jpg" style="width:100%; height:auto;"></div>
   </div>
</div>
@endsection
