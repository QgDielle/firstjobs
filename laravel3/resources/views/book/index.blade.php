<x-layout>

 <x-navbar/>

 <x-slot name='title'>
  Book shared
 </x-slot>

 <div class="container-fluid p-5 mt-5 text-center bg-custom">
  <div class="row justify-content-center">
   <h1 class="display-3 rounded p-3 tx-p bg-white">
    Book Shared
   </h1>

   @foreach($books as $book)
    <div class="col-12 col-md-3">

     <div class="card">
      @if ($book->cover)
      <img src="{{Storage::url($book->cover)}}" class="card-img-top" alt="...">
      @else
      <img src="https://picsum.photos/400" class="card-img-top" alt="...">
      @endif
     <div class="card-body">
      <h5 class="card-title tx-p">{{$book->title}}</h5>
      <p class="text-muted fst-italic">{{$book->autore}}</p>
      <a href="{{route('book.show', compact('book'))}}" class="btn btn-cst tx-p">Scopri di più</a>
     </div>
    </div>
   </div>
    @endforeach

  </div>
 </div>

 <x-footer />

</x-layout>