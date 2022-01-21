@extends('layouts.app')

@section('content')
@foreach($projects as $project)
   <div >
   <img src="/storage/{{$project['image']}}" width="100%" height="auto">
   </div>
   <div class="">
   <h1>{{$project['name']}}</h1>
</div>
<div>
   <p class="text-justify m-5">
      {{$project['description']}}
   </p>
</div>
<div class="row m-5">   
@foreach($photos as $photo)
<div class='col-4 pb-4'>
          <img src="/storage/{{$photo['photo']}}"  class="w-100">
       </div> 
@endforeach
</div>
@endforeach
  @foreach($previous as $previousb)
  <a href="/project/{{$previousb['id']}}" style="position:absolute;left:5%" class="mb-5">
  <button type="button" class="btn btn-dark">previous</button>   
</a>
  @endforeach
  @foreach($next as $nextb)
  <a href="/project/{{$nextb['id']}}" style="position:absolute;right:5%" class="mb-5">
  <button type="button" class="btn btn-dark">next</button>
</a>
  @endforeach
@endsection
