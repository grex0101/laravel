@extends('layouts.app')

@section('content')
@foreach($projects as $project)
<div class="container">
 <form action="/project/add_photo/{{$project['id']}}" enctype="multipart/form-data" method="post">
 	@csrf
 	<div class="row">
 	<div class="col-8 offset-2">
 		<div>
 			<h1>{{$project['name']}}</h1>
 		</div>
 		<div class="form-group row">
                        <div class="row">
                        	<label for="image" class="col-md-4 col-form-label">Add image</label>
                        	<input type="file" class="form-control-file" id="image" name="image">
                        	@error('image')
                                        <strong>{{ $message }}</strong>
                             @enderror
                        </div>
                        <div class="row pt-3">
                        	<button class="btn btn-primary">Add Project</button>
                        </div>
 	</div>
 </div> 
 </form>
</div>
@endforeach
@endsection
