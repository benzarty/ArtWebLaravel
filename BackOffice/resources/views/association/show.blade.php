@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">



<div class="card" style="margin:20px;">
  <div class="card-header">Association Page</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text">picture : {{ $associations->picture }}</p>

        <h5 class="card-title">nom : {{ $associations->nom }}</h5>
        <p class="card-text">owner : {{ $associations->owner }}</p>
        <p class="card-text">nbdepersonne : {{ $associations->nbdepersonne }}</p>
        <p class="card-text">objective : {{ $associations->objective }}</p>

        <p class="card-text">description : {{ $associations->description }}</p>

  </div>
    </hr>
  </div>
</div>












     
</div>



















</div>

</div>

<!-- [ content ] End -->

<!-- [ Layout footer ] Start -->
<nav class="layout-footer footer bg-white">
    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
        <div class="pt-3">
            <span class="footer-text font-weight-semibold">&copy; <a href="https://srthemesvilla.com" class="footer-link" target="_blank">Srthemesvilla</a></span>
        </div>
        <div>
            <a href="javascript:" class="footer-link pt-3">About Us</a>
            <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
            <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
            <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
        </div>
    </div>
</nav>
<!-- [ Layout footer ] End -->
</div>


@endsection