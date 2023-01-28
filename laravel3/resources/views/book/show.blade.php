<x-layout>

    <x-navbar />

    <div class="container-fluid p-5 mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="display-2 tx-p">
                    {{$book->title}}
                </h1>
            </div>
        </div>
    </div>

<div class="container-fluid text-center bg-custom">
 <div class="row justify-content-center">
  <div class="col-12 col-md-6 bg-white my-3">
   <img src="{{Storage::url($book->cover)}}" alt="{{$book->title}}" class="mt-3 img-fluid shadow-lg">
   <h3 class="p-3">{{$book->autore}}</h3>
   <p>{{$book->description}}</p>
   <a href="{{route('book.index')}}" class="btn btn-cst my-3">torna indietro</a>
  </div>
 </div>
</div>

</x-layout>