<x-layout>

 <x-navbar />

 <div class="container-fluid p-5 mt-5 bgwarning">
  <div class="row justify-content-center text-center">
   <div class="col-12">
    <h1 class="display-2 p-3 tx-p">
     Modifica il tuo E-book preferito!
    </h1>
   </div>
  </div>
 </div>


 @if(session('readerUpdated'))
 <div class="row justify-content-center text-center">
  <div class="col-6">
   <div class="alert alert-success">
    {{session('readerUpdated')}}
   </div>
  </div>
 </div>
 @endif

 <div class="container-fluid p-5 bg-custom">
  <div class="row justify-content-center">
   <div class="col-12 col-md-8">

    <form class="p-5 border tx-p bg-light" method="POST" action="{{route('reader.update', compact('reader'))}}" enctype="multipart/form-data">

     @if ($errors->any ())
     <div class="alert alert-danger">
      <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
      </ul>
     </div>
     @endif

     @csrf
     @method('put')

     <div class="mb-3 tx-p">
      <label for="name" class="form-label">Nome eBbook</label>
      <input type="text" name="name" class="form-control" id="name" value="{{$reader->name}}">
     </div>

     <div class="mb-3 tx-p">
      <label for="brand" class="form-label">Brand</label>
      <input type="text" name="brand" class="form-control" id="brand" value="{{$reader->brand}}">
     </div>

     <div class="mb-3 tx-p">
      <label for="current_logo" class="form-label">Immagine attuale</label>
      <img style="width:400px" src="{{Storage::url($reader->logo)}}" alt="">
     </div>

     <div class="mb-3 tx-p">
      <label for="logo" class="form-label">Logo</label>
      <input type="file" name="logo" class="form-control" id="logo">
     </div>

     <div class="mb-3 tx-p">
      <label for="description" class="form-label">La tua recensione</label>
      <textarea class="form-control" name="description" rows="10" id="description" value="{{$reader->description}}"></textarea>
     </div>

     <button class="btn btn-cst center shadow tx-p mt-3" type="submit">Edit you E-book!</button>
    </form>

   </div>
  </div>
 </div>



 <x-footer />

</x-layout>