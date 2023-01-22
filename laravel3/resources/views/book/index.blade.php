<x-layout>

 <x-navbar/>

 <x-slot name='title'>
  Book shared
 </x-slot>

 <div class="container-fluid p-5 text-center ">
  <div class="row justify-content-center">
   <col class="col-12">
   <h1 class="display-3 p-3 tx-p">
    Book Shared
   </h1>

   @foreach($books as $book)
    <div class="col-12 col-md-3">
     <div class="card">
      <img src="https://picsum.photos/300" class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title tx-p">{{$book->title}}</h5>
      <p class="text-muted fst-italic">{{$book->autore}}</p>
      <a href="#" class="btn btn-cst tx-p">Scopri di più</a>
     </div>
    </div>
    @endforeach
   </div>

  </div>
 </div>

</x-layout>