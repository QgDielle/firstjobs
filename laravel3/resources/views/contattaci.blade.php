<x-layout>

    <x-navbar />

    <x-slot name='title'>
        who is SyB
    </x-slot>

    {{-- header --}}
    <div class="container-fluid p-5 mt-5 text-center ">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-3 tx-p">
                    Chi siamo
                </h1>
            </div>
        </div>
    </div>

    <div class="container mx-5 px-5 text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <img src="../media/booksmile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
            </div>
            <div class="col-12 col-md-6">
                <h3>
                    Siamo un piccolo team di lettori che ha come scopo quello di archiviare la maggior parte dei libri più interessanti in un unico sito. Qui potrai condividere i tuoi libri preferiti, leggerne la recensione o un piccolo riassunto così da poter decidere se comprarlo o meno.
                </h3>
            </div>
        </div>
    </div>


    <div class="container-fluid p-5 mb-3">
        <div class="row justify-coontent-center">
            <div class="col-12 text-center">
                <h2 class="p-3"> E se ti piace la nostra philosophy, puoi anche decidere di diventare parte integrante della nostra community!</h2>

                <h1 class="display-4 p-3 tx-p">
                    Lavora con noi!
                </h1>
                {{-- <h2 class="tx-p display-5">Cosa stai aspettando...</h2>
                <button class="btn btn-cst shadow tx-p" href="/">Share!</button> --}}
            </div>
        </div>
    </div>

    <div class="container p-5 bg-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border tx-p bg-light" method="POST" action="{{route('contattaci.submit')}}">
                    @csrf

                    <div class="mb-3 tx-p">
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3 tx-p">
                        <label for="email" class="form-label">Indirizzo E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 tx-p">
                        <label for="message" class="form-label">Inserisci una tua breve descrizione</label>
                        <textarea class="form-control" name="message" rows="7" id="message"></textarea>
                    </div>

                    <button class="btn btn-cst center shadow tx-p mt-3" type="submit">Contattaci!</button>
                </form>

            </div>
        </div>
    </div>






    <x-footer />

</x-layout>