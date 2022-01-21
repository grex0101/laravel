@extends('layouts.app')

@section('content')
<div class="container">
   <div class='row'>
    <div class='col-3'>
      <img src="{{$user->profile->profileImage()}}" class="rounded-circle p-5 w-100">  
    </div>
    <div class='col-9'>
     <div class='pt-5 d-flex justify-content-between align-items-baseline'>

      <div class="d-flex align-items-center pb-4">
         <div class="pr-3 h4">{{$user->username ?? N/A}}</div>
       <follow-button user_id="{{$user->id}}" follows="{{ $follows}}"><follow-button>
      </div>
      @can('update', $user->profile)
      <a href="/p/create">Add new post</a>
      @endcan

     </div>
      @can('update',$user->profile)
      <a href="/profile/{{$user->id}}/edit">Edit profile</a>
      @endcan
     <div class='d-flex'>
         <div class='pr-3'><strong>{{$user->posts->count()}}</strong> posts</div>
         <div class='pr-3'><strong>795</strong> followers</div>
         <div class='pr-3'><strong>125</strong> following</div>
     </div>
     <div class='pt-4'>{{ $user->profile->title}}</div>
     <div>{{$user->profile->description}}</div>
     <div><a href="#">{{$user->profile->url}}</a></div>
    </div>
    <div class='row pt-5'>
       @foreach($user->posts as $post)
       <div class='col-4 pb-4'>
       <a href="/p/{{$post->id}}">
          <img src="/storage/{{ $post->image }}"  class="w-100">
       </a> 
       </div>
       @endforeach
    </div>
    
   </div> 
</div>

@endsection
