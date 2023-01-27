<x-layout>

 <x-navbar />

 <x-slot name='title'>
  Accedi
 </x-slot>

 {{-- header --}}

 <div class="container-fluid p-5 mt-5  text-center ">
  <div class="row justify-content-center">
   <div class="col-12">
    <h1 class="display-1 p-3 tx-p">
     Accedi a Share your Book
    </h1>
   </div>
  </div>
 </div>


 <div class="container p-5 bg-custom text-center shadow-lg">
  <div class="row justify-content-center">
   <div class="col-8">

   <form class="p-5 bg-white rounded" method="POST" action="{{route('login')}}">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
     <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
    @endif

    <div class="mb-3 rounded tx-p">
     <label for="email" class="form-label">Indirizzo Email</label>
     <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3 rounded tx-p">
     <label for="password" class="form-label">Password</label>
     <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3 form-check">
     <input type="checkbox" name="remember" class="form-check-input" id="remember">
     <label class="form-check-label" for="remember">Ricordami</label>
    </div>
    <button type="submit" class="btn btn-cst shadow tx-p">Accedi!</button>
   </form>

  </div>
 </div>
 </div>

 <x-footer />

</x-layout>