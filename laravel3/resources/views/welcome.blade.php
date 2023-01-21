<x-layout>

<x-navbar />

    <x-slot name='title'>
        Benvenuti in SyB
    </x-slot>

    {{-- header --}}
    <div class="container-fluid p-5 bgwarning text-center">
        <div class="row justify-content-center">
            <col class="12">
                <h1 class="display-1 p-3 tx-p">
                    Share your Book
                </h1>
                <h2 class="display-5 p-2 tx-p">Condividi con noi il tuo libro preferito!</h2>
                <img src="/media/booktransparent.jpg" alt="">
        </div>
    </div>

    <x-footer />

</x-layout>