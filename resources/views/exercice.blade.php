@extends('template')
@section("content")
@php
    $animal = "Cheval"
@endphp
@if ($animal == "chien")
    <p>l'animal est un chien</p>
@elseif ($animal == "chat")
    <p>l'animal est un chat</p>
@else
    <p>l'animal n'est ni chien ni chat</p>
@endif
<hr>
@php
    $note  = 19;
@endphp
@if ($note < 10)
    <p>
        insuffisant
    </p>
@elseif ($note >= 10 and $note < 12)
   <p>passable</p>
@elseif ($note >= 12 and $note < 14)
    <p>assez-bien</p>
@elseif ($note >= 14 and $note < 16)
    <p>bien</p>
@elseif ($note >= 16 and $note < 18)
    <p>très bien</p>
@elseif ($note >= 18 and $note <= 20)
    <p>Excellent</p>
@endif
<hr>
@php
    $tab = ["Coulibaly","Makalou","Diallo","Diarra"];
    $i = 0;
@endphp
@while ($i < count($tab))
        <p>{{$tab[$i]}}</p>
        @php $i++ @endphp
@endwhile
<hr>
@foreach ($tab as $item )
    <h5>{{$item}}</h5>
@endforeach


@php
    $tab2 = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimache"];
@endphp
@foreach ($tab2 as $item)
    @if($loop->first)
       <div>
          <h5>{{$item}}</h5>
       </div>
    @endif
    @if($loop->last)
       <div>
         <h5>{{$item}}</h5>
       </div>
    @endif
@endforeach
@endsection
