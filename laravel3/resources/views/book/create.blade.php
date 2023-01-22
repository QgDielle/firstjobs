<x-layout>

    <x-navbar />

 <div class="container-fluid p-5 bgwarning text-center">
  <div class="row justify-content-center">
   <div class="col-12">
    <h1 class="display-2 p-3 tx-p">
     Inserisci il tuo libro preferito!
    </h1>
   </div>
  </div>

  <div class="container-fluid p-5 bg-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border tx-p bg-light" method="POST" action="{{route('book.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 tx-p">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="mb-3 tx-p">
                        <label for="autore" class="form-label">Autore</label>
                        <input type="text" name="autore" class="form-control" id="autore" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 tx-p">
                        <label for="cover" class="form-label">Copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 tx-p">
                        <label for="description" class="form-label">La tua recensione</label>
                        <textarea class="form-control" name="description" rows="10" id="description"></textarea>
                    </div>

                    <button class="btn btn-cst center shadow tx-p mt-3" type="submit">Share!</button>
                </form>

            </div>
        </div>
    </div>


<x-footer />

 </x-layout>