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
                @if ($travel->photo)
                  <img src="{{ $travel->photo }}" alt="{{ $travel->label }}" height="400px" width="auto">
                @endif
              </div>
              <div class="card-action">
                <a href="{{ url('travels') }}">Retour à la liste</a>
                <a href="{{ url('travel/update/' . $travel->id) }}">Modifier le voyage</a>
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
                  @if ($travel->photo)
                    <img src="{{ $travel->photo }}" alt="{{ $travel->label }}" height="400px" width="auto">
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endisset
    
  </div>
@endsection