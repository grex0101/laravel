@extends('layouts.app')

@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/storage/uploads/AJ_Morino - 02.jpg" class="d-block vie"  width="100%" height="450px" alt="...">
    <h1 style="" >AJ-Morino</h1>
    <a href="/project/2"><button type="button" class="btn btn-outline-light">View Project</button></a>
       
    </div>
    @foreach ($projects as $project)
    @if($project['main'] == true)
    <div class="carousel-item">
    <h1 style="" class="projecttitle" >{{$project['name']}}</h1>
    <a href="/project/{{$project['id']}}"><button type="button" class="btn btn-outline-light viewbutton">View Project</button></a>
      <img src="/storage/{{$project['image']}}" class="d-block" width="100%" height="450px" alt="...">
    </div>
    @endif
    @endforeach
    <!--<div class="carousel-item">
    <h1 style="" class="projecttitle" >AJ-Morino</h1>
      <img src="/storage/uploads/BWTC - 01.jpg" class="d-block" width="100%" height="450px" alt="...">
     
    </div>
    <div class="carousel-item">
    <h1 style="" class="projecttitle" >AJ-Morino</h1>
      <img src="/storage/uploads/BWTC - 03.jpg" class="d-block" width="100%" height="450px" alt="...">
      
    </div>-->
  </div>
  <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" style="background-color:rgb(0,0,0,0.7); width:40px; height:40px;" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next"  type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" style="background-color:rgb(0,0,0,0.7); width:40px; height:40px;"  aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div >
  <h2 class="text-center mt-5" >Sic Parvis Magna</h2>
</div>
<div class="justify-content-center">
  <h4 class="text-center mt-4">Thus great things from small things come</h4>
  <div class="col-md-8 justify-content-center" style="margin-left:20%">
  <p class="text-justify mt-4" style="font-size:18px"><strong>SPM Partners</strong> is a specialized firm with a focus on the design of distinctive Towers
Residential and Commercial projects in a range of styles. With every project we strive to
deliver top end client service, attention to detail, and execution of work of the highest
quality.</p>
</div>
</div>

<!--
 <div class="d-flex">
<div class="col-8">
  <img src="/storage/uploads/EBFal0cXSy12fmcSxwKYMeonVloPRRxUqrvbGuYL.png" width="100px" height="100px">
  <h4>Project 1</h4>
</div>
<div class="col-8">
  <img src="/storage/uploads/hKgI54LhZuvketXgLMIQ8dJZKy1Unph2gzUfCMDO.jpg" width="100px" height="100px">
  <h4>Project 2</h4>
</div>
<div class="col-6">
  <img src="/storage/uploads/QG8wxpje6nrzLsS1Qm14uCXopLUklylnzwFE4uAi.png" width="100px" height="100px">
  <h4>Project 3</h4>
</div>
</div>-->

<div class="row m-5">
  @foreach($projects as $project)
  <div class='col-4 pb-4'>
       <a href="/project/{{$project['id']}}">
          <img src="/storage/{{$project['image']}}"  class="w-100">
       <h4 class= "mt-3 text-center ">{{$project['name']}}</h4>
</a> 
       </div> 
  @endforeach
</div>
<!--
<div class='col-4 pb-4'>
       <a href="#">
          <img src="/storage/uploads/BWTC - 01.jpg"  class="w-100">
       </a>
       <a href="#">
       <h4 class= "mt-3 text-center ">Project 2</h4>
        </a>
       </div>
<div class='col-4 pb-4'>
       <a href="#">
          <img src="/storage/uploads/BWTC - 03.jpg"  class="w-100">
       </a>
       <a href="#">
       <h4 class= "mt-3 text-center ">Project 3</h4> 
</a> 
      </div> 
-->
@endsection
