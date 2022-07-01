@extends('template')
@section("title")
    Article
@endsection
@section("content")
<div class="p-4 mb-1 bg-light rounded-3">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">Gestion des articles</h1>
    </div>
  </div>
<div class="container">
    <div class="card">
    <h5 class="card-header">Article</h5>
    <div class="card-body">
        <form action="{{url('article')}}" method="post">
            @csrf
          <p>
            <label for="designation">Désignation</label>
            <input type="text" class="form-control" name="designation" id="designation">
          </p>
          <p>
            <label for="qte">Quantité</label>
            <input type="text" class="form-control" name="quantite" id="qte">
          </p>
          <p>
            <label for="pu">PU</label>
            <input type="text"class="form-control" name="pu" id="pu">
          </p>
          <p>
            <input type="submit" value="Valider" class="btn btn-primary">
          </p>
        </form>
      </div>
    </div>
</div>
@endsection
