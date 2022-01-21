@extends('layouts.app')

@section('content')
<div class="container">
 <form action="/project/add" enctype="multipart/form-data" method="post">
 	@csrf
 	<div class="row">
 	<div class="col-8 offset-2">
 		<div>
 			<h1>Add New Project</h1>
 		</div>
 		<div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label">Project name</label>
                                <input id="name" 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}"  
                                autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div >
  <textarea defaultvalue="Project description" class="form-control" data-val="true" data-val-required="This field is required." id="ctrl_3_19" name="description" placeholder="Project description"></textarea>
  @error('description')
                                        <strong>{{ $message }}</strong>
                             @enderror                         
</div>
                        <div class="row">
                        	<label for="image" class="col-md-4 col-form-label">Main image</label>
                        	<input type="file" class="form-control-file" id="image" name="image">
                        	@error('image')
                                        <strong>{{ $message }}</strong>
                             @enderror
                        </div>
                        <div class="row">
                        	<label for="imageg" class="col-md-4 col-form-label">image</label>
                        	<input type="file" class="form-control-file" id="imageg" name="imageg" multiple>
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
@endsection
