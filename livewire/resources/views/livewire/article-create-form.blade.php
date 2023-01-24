<div>
  <form class="p-5 shadow">
   @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="subtitle" class="form-label">Sottotitolo</label>
    <input type="subtitle" class="form-control" id="subtitle">
  </div>


  <div class="mb-3">
    <label for="body" class="form-label">Articolo</label>
    <textarea name="" id="body" cols="30" rows="7"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Inserisci Articolo</button>
</form>
</div>
