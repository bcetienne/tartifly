@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Voyages</h1>

    @isset($travel)
      <h5>Affichage du voyage numéro {{ $travel->id }}</h5>
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
                <a href="{{ url('travel/delete/' . $travel->id) }}" style="color: red;">Supprimer le voyage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endisset
    
    @isset($travels)
    <h5>Liste des voyages</h5>
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

    @isset($updateTravel)
      <h5>Edition du voyage {{ $updateTravel->id }}</h5>
      <div class="container">
        <div class="row">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-content" style="text-align:center;">
                  <a href="{{ url('travel/' . $updateTravel->id) }}"><span class="card-title">Voyage {{ $updateTravel->id }}</span></a>
                  {{ Form::open(array('url' => 'travel/update', 'method' => 'put')) }}
                    <div class="input-field" style="display: none;">
                      <input id="travelId" name="travelId" type="text" class="validate" value="{{ $updateTravel->id }}">
                      <label for="travelId">Numéro du voyage</label>
                    </div>
                    <div class="input-field">
                      <input id="label" name="label" type="text" class="validate" value="{{ $updateTravel->label }}">
                      <label for="label">Libellé du voyage</label>
                    </div>
                    <div class="input-field">
                    <textarea id="description" name="description" class="materialize-textarea">{{ $updateTravel->description }}</textarea>
                      <label for="description">Description du voyage</label>
                    </div>
                    <div class="input-field">
                      <input id="country" name="country" type="text" class="validate" value="{{ $updateTravel->country }}">
                      <label for="country">Pays</label>
                    </div>
                    <div class="input-field">
                      <input id="city" name="city" type="text" class="validate" value="{{ $updateTravel->city }}">
                      <label for="city">Ville</label>
                    </div>
                    <div class="input-field">
                      <input id="date_begin" name="date_begin" type="text" class="datepicker" value="{{ $updateTravel->date_begin }}">
                      <label for="date_begin">Date de début</label>
                    </div>
                    <div class="input-field">
                      <input id="date_end" name="date_end" type="text" class="datepicker" value="{{ $updateTravel->date_end }}">
                      <label for="date_end">Date de fin</label>
                    </div>
                    <div class="input-field">
                      <input id="price" name="price" type="number" class="validate" min="0" value="{{ $updateTravel->cost }}">
                      <label for="price">Tarif (€)</label>
                    </div>
                    <div class="input-field">
                      <p>
                        <label>
                          <input type="checkbox" id="dispo" name="dispo" />
                          <span>Disponible</span>
                        </label>
                      </p>
                    </div>
                    <div class="btn">
                      <input type="submit" value="Envoyer" style="border:0; background: transparent; color: white;">
                    </div>
                  {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    @endisset
    
  </div>
@endsection