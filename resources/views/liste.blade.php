@extends('template')
@section("title")
    Facture
@endsection
@section("content")
<div class="container">
    <br>
    <a href="{{url('/')}}" class="btn btn-light">retour</a>
    <hr>
    <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Désignation</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">PU</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{$tab['designation']}}</td>
                <td>{{$tab['quantite']}}</td>
                <td>{{$tab['pu']}}</td>
            </tr>
            </tbody>
    </table>
</div>
@endsection
