@extends('layouts.app')

@section('content')
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:204px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:204px;width:600px;}</style></div></div>

<div style="margin-left:30px;margin-top:40px">
<h4>
Jeita, Ain El Jdide,
</h4>
<h5>
Sector 4,
</h5>
<h5>
Street 2, Barmo bldg, GF
</h5>
</div>
<div style="margin-left:30px;margin-top:30px">
<div>
<span><strong>Mobile:</strong><span><a href="tel:00961 3680804"> 00961 3680804</a>
</div>
<div>
<span><strong>Email:</strong><span><a href="mailto:c.barmo@spm-partners.com"> c.barmo@spm-partners.com</a>
</div>
</div>

<form action="/m" enctype="multipart/form-data" method="post">
    @csrf
<div class="container" style="margin-left:50px;margin-top:40px;" >
    <div class="row" style="margin-bottom:8px">
    <h2>Leave us a message!</h2>
    </div>
<div class="row" style="margin-bottom:8px">
<div class="col-md-4">
    <input type="text" class="form-control" placeholder="name" aria-label="name"  name="name"required>
  </div>
</div>
<div class="row" style="margin-bottom:8px">
<div class="col-md-4">
    <input type="text" class="form-control" placeholder="Email" aria-label="email"  name="email" required>
  </div>
</div>
<div class="row" style="margin-bottom:8px">
<div class="col-md-4">
    <input type="text" class="form-control" placeholder="Your number" aria-label="phone_number" name="phone_number">
  </div>
</div>
<div class="row" style="margin-bottom:8px">
<div class="col-md-6">
  <textarea defaultvalue="Your Message* " class="form-control" data-val="true" data-val-required="This field is required." id="ctrl_3_19" name="message" placeholder="Your Message* "></textarea>
</div>
<div class="row" style="margin-left:100px;margin-top:8px">
    <div class="col-md-8">
    <button type="submit" class="btn btn-outline-dark">Send!</button>
</div>
</div>
</div>
</div>
</form>
@endsection
