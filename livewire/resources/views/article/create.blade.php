<x-layout>
  <x-header>
   Inserisci Articolo
  </x-header>

<div class="container my-5">
 <div class="row justify-content-center">
  <div class="col-12 col-md 8">
    {{-- form di creazione gestito col componente live wire --}}
    @livewire('article-create-form')
  </div>
 </div>
</div>

</x-layout>