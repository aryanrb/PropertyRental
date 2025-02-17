@extends('layouts.app')

@section('mainTitle') Listings-Hajurko Property @endsection

@extends('_layouts.customTop')
<style>
    .page-top-section{
        background-image: url("../img/review-bg1.jpg");
        background-repeat: no-repeat;
        background-position: cover;
    }
</style>
@section('content')
<!-- Page top section -->
<section class="page-top-section set-bg mb-5" > 
    <div class="container text-white">
        <h2>Search Reasult</h2>
    </div>
</section>

<div class="container mt-4">
  <div class="">
      <p class="text-success">Here is your search reasult</p>
  </div>
</div>

<div class="container">
  <div class="row">
    @if($quickSrch->count())  
    @foreach($quickSrch as $quickSrchs)
    <div class="col-lg-4 col-md-6 mt-5"  style="">
      <div class="card shadow" style="width: 22rem;">
          <img class="card-img-top" src="{!! asset('uploads/files/'.$quickSrchs->image) !!}" alt="Card image cap" style="width: 22rem; height: 12rem;">        
        <div class="topText top-right text-white"><i class="fa fa-plus"></i></div>

        <div class="card-body">
          <div class="text-center feature-title">
            <h3 class="text-info pb-2">Price: {!! $quickSrchs->totPrice !!}</h3>
            <i class="fa fa-map-marker-alt"></i><small class="ml-1">{!! $quickSrchs->propLocation !!}</small>
          </div>
        </div>
        <div class="room-info-warp">
          <div class="room-info">
            <div class="rf-left">
              <p><i class="fa fa-utensils"></i>{!! $quickSrchs->kitchen !!} Kitchen</p>
              <p><i class="fa fa-bed"></i>{!! $quickSrchs->bedRoom !!} Bedrooms</p>
            </div>
            <div class="rf-right">
              <p><i class="fa fa-couch"></i>{!! $quickSrchs->livingRoom !!} Living Room</p>
              <p><i class="fa fa-bath"></i>{!! $quickSrchs->tBathroom !!} Bathrooms</p>
            </div>	
          </div>

          <div class="room-info"> 
            <div>
              <div class="rf-left">
                <p><i class="fa fa-motorcycle"></i>{!! $quickSrchs->bikeP !!} Bike </p>
                <p><i class="fa fa-tint"></i>{!! $quickSrchs->waterB !!} Boaring </p>
              </div>
              <div class="rf-right">
                <p><i class="fa fa-car"></i>{!! $quickSrchs->carP !!} Car</p>
                <p><i class="fa fa-tint"></i>{!! $quickSrchs->waterD !!} Drinking  </p>
              </div>
            </div>	
          </div>
        </div>
              
        <a class="bg-info text-center p-2 detailV" href="{{ URL::to('/propDetail') }}" style="border-top: 1px solid #ebebeb;"> 
          <h4 class="text-white pt-1"> View Details </h4>
        </a>
      </div>
    </div>
    @endforeach
    @else
        <h5 class="text-danger pl-3">Sorry your search did not match any record!!</h5>
    @endif
  </div>
</div>
<div class="container pt-5 align-items-center">
  <div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><p class=""></p></div>
  </div>
</div>
@endsection