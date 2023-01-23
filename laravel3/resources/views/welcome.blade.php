<x-layout>

    <x-navbar />

    <x-slot name='title'>
        Benvenuti in SyB
    </x-slot>

    {{-- header --}}
    <div class="container-fluid p-5 mt-5 bgwarning text-center">
        <div class="row justify-content-center">
            <col class="col-12">
            <h1 class="display-1 p-3">
                Share your Book
            </h1>

            @if (session('emailSent'))
                <div class="alert alert-success">
                    {{ session('emailSent') }}
                </div>
            @endif
             @if (session('emailError'))
                <div class="alert alert-danger">
                    {{ session('emailError') }}
                </div>
            @endif

            @if (session('bookCreated'))
                <div class="alert alert-success">
                    {{ session('bookCreated') }}
                </div>
            @endif
             {{-- @if (session('emailError'))
                <div class="alert alert-danger">
                    {{ session('emailError') }}
                </div>
            @endif --}}


            <h2 class="display-5 p-2">Condividi con noi il tuo libro preferito!</h2>
            <img src="/media/booktransparent.jpg" alt="">
        </div>
    </div>

    <x-footer />

</x-layout>