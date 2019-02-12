@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Page d'administration</h1>
    <h3>Ajouter un voyage</h3>
    {{ Form::open(array('url' => 'travel/create')) }}
      <div class="input-field">
        <input id="label" name="label" type="text" class="validate">
        <label for="label">Libellé du voyage</label>
      </div>
      <div class="input-field">
        <textarea id="description" name="description" class="materialize-textarea"></textarea>
        <label for="description">Description du voyage</label>
      </div>
      <div class="input-field">
        <input id="country" name="country" type="text" class="validate">
        <label for="country">Pays</label>
      </div>
      <div class="input-field">
        <input id="city" name="city" type="text" class="validate">
        <label for="city">Ville</label>
      </div>
      <div class="input-field">
        <input id="date_begin" name="date_begin" type="text" class="datepicker">
        <label for="date_begin">Date de début</label>
      </div>
      <div class="input-field">
        <input id="date_end" name="date_end" type="text" class="datepicker">
        <label for="date_end">Date de fin</label>
      </div>
      <div class="input-field">
        <input id="price" name="price" type="number" class="validate" min="0">
        <label for="price">Tarif</label>
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

@endsection