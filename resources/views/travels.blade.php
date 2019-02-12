@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Voyages</h1>
    @if (empty($id) || $id == null)
        <h5>Liste des voyages</h5>
      @else
        <h5>Voyage numéro {{ $id }}</h5>
    @endif

    @isset($travel)
      <div class="container">
        <div class="row">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-content" style="text-align:center;">
              <a href="{{ url('travel/' . $travel->id) }}"><span class="card-title">Voyage {{ $travel->id }}</span></a>
                <p>Libellé : {{ $travel->label }}</p>
                <p>Pays : {{ $travel->country }}</p>
                <p>Ville : {{ $travel->city }}</p>
                <p>Prix : {{ $travel->cost }} euros.</p>
                <p>Description : {{ $travel->description }}</p>
                <p>Disponibilité : @if ($travel->dispo === 1)
                                      Oui
                                      @else
                                      Non
                                    @endif
                </p>
              </div>
              <div class="card-action">
                <a href="{{ url('travels') }}">Retour à la liste</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endisset
    
    @isset($travels)
      @foreach ($travels as $travel)
      <div class="container">
        <div class="row">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-content" style="text-align:center;">
              <a href="{{ url('travel/' . $travel->id) }}"><span class="card-title">Voyage {{ $travel->id }}</span></a>
                <p>Libellé : {{ $travel->label }}</p>
                <p>Pays : {{ $travel->country }}</p>
                <p>Ville : {{ $travel->city }}</p>
                <p>Prix : {{ $travel->cost }} euros.</p>
                <p>Description : {{ $travel->description }}</p>
                <p>Disponibilité : @if ($travel->dispo === 1)
                                      Oui
                                      @else
                                      Non
                                    @endif
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @endisset
    
  </div>
@endsection