<x-layout>

 <x-navbar />

 <x-slot name='title'>
  Book shared
 </x-slot>

 <div class="container-fluid p-5 mt-5 text-center bg-custom">
  <div class="row justify-content-center">
   <h1 class="display-3 rounded p-3 tx-p bg-white">
    Book Shared
   </h1>
  </div>
 </div>



 <div class="container my-5">
  <div class="row justify-content-center">

   @foreach ($readers as $reader)
   <div class="col-12 col-md-3">
    <div class="card">
     <img src="{{Storage::url($reader->logo)}}" class="card-img-top" alt="{{$reader->name}}">
     <div class="card-body">
      <h5 class="card-title">{{$reader->name}}</h5>
      <p class="card-text fst-italic text-muted">{{$reader->brand}}</p>
      <a href="#" class="btn btn-primary mt-3">Scopri di più</a>
     </div>
    </div>
   </div>

   @endforeach

  </div>
 </div>

</x-layout>