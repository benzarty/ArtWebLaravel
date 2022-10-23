@extends('layouts.master')

@section('content')

<section class="section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="listing-top-heading mb-xl-20">

<div class="sort-by"> <span class="text-custom-black fs-14 fw-600">Sort by</span>
<div class="group-form">
<select class="form-control form-control-custom custom-select">
<option>A to Z</option>
<option>Z to A</option>
</select>
</div>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@foreach ($velos as $velo)

<div class=" col-lg-4 col-md-6">
<div class="bicycle-grid mb-xl-30">
<div class="bicycle-grid-wrapper bicycle-grid bx-wrapper">
<div class="image-sec animate-img"> <a href="#">  <img src="images/{{ Session::get('image') }}">
     </a> </div>
<div class="bicycle-grid-caption padding-20 bg-custom-white p-relative">
<h4 class="title fs-16"><a href="#" class="text-custom-black">{{$velo->type}}<small class="text-light-dark"></small></a></h4>
<span class="price"><small>{{$velo->tarif}} $</small></span>
<div class="action"> <a class="btn-second btn-small" href="#">View</a> <a class="btn-first btn-submit" href="#">Book</a> </div>
</div>
</div>
</div>
</div>
@endforeach


<div class="row">
<div class="col-12">
<nav>
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link" href="#">Previous</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>
</div>
</div>
</div>
</section>


@endsection
