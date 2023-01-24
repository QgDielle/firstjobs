<x-layout>
 <x-header>
  Dashboard Articoli
 </x-header>

 <div class="container my-5">
  <div row class="justify-content-center">
   <div class="col-12 col-md-8">

     {{-- dashboard articoli come componente livewire --}}
     @livewire('article-dashboard')

   </div>
  </div>
 </div>
</x-layout>