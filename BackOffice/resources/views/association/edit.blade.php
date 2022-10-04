@extends('FrontEnd.Master')



@section('content')
<div class="layout-content">




<div class="container-fluid flex-grow-1 container-p-y">




<div class="container">
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Association</div>
  <div class="card-body">
       
      <form action="{{ url('association/' .$association->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")


        <input type="hidden" name="id" id="id" value="{{$association->id}}" id="id" />
       




        <label>nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$association->nom}}" class="form-control"></br>


        <label>owner</label></br>
        <input type="text" name="owner" id="owner" value="{{$association->owner}}" class="form-control"></br>


        <label>nbdepersonne</label></br>
        <input type="text" name="nbdepersonne" value="{{$association->nbdepersonne}}" id="nbdepersonne" class="form-control"></br>


        <label>objective</label></br>
        <input type="text" name="objective" value="{{$association->objective}}" id="objective" class="form-control"></br>

     

        <label>description</label></br>
        <input type="text" name="description" value="{{$association->description}}" id="description" class="form-control"></br>


        
        <label>picture</label></br>
        <input type="text" name="picture" value="{{$association->picture}}" id="picture" class="form-control"></br>

















        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
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