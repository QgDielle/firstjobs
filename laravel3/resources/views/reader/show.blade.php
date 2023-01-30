<x-layout>

    <x-navbar />

    <div class="container-fluid p-5 mt-5 shadow">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="display-2 p-3 tx-p">
                    {{$reader->name}}
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 text-center bg-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 bg-white my-3">
                <img src="{{Storage::url($reader->logo)}}" alt="{{$reader->name}}" class="img-fluid">
                <h3>{{$reader->brand}}</h3>
                <p>{{$reader->description}}</p>

                <a href="{{route('reader.index')}}" class="btn btn-cst my-3">torna indietro</a>
                <a href="{{route('reader.edit', compact('reader'))}}" class="btn btn-outline-primary bg-warning my-3">Modifica</a>
            </div>

        </div>
    </div>

</x-layout>