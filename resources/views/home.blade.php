@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row" style="padding-bottom:20px;">
       <div class="col-3">
            <img src="/img/img.jpg" style="width:100%; height:auto;">
       </div>
       <div class="col-9">
            <div class="row">
                <div class="col-8"><h1>practiceApp Application</h1></div>
                <div class="col-4"><Button style="width:100%;">Follow</Button></div>
            </div>
            <div class="d-flex">
                <div style="padding-right: 25px;"><strong>153</strong> posts</div>
                <div style="padding-right: 25px;"><strong>23k</strong> followers</div>
                <div style="padding-right: 25px;"><strong>75</strong> following</div>
            </div>
            <div style="padding-top: 20px;"><strong>practiceApp.org</strong></div>
            <div>This is a sample text about a Laravel web application development using a tutorial from freeCodeCamp</div>
            <div><strong><a href="">www.practiceApp.org</a></strong></div>
       </div>
   </div>

   <div class="row" style="padding-top:20px;">
       <div class="col-4"><img src="/img/img.jpg" style="width:100%; height:auto;"></div>
       <div class="col-4"><img src="/img/img.jpg" style="width:100%; height:auto;"></div>
       <div class="col-4"><img src="/img/img.jpg" style="width:100%; height:auto;"></div>
   </div>
</div>
@endsection
