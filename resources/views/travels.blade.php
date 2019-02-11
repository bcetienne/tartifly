@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Voyages</h1>
    @if (empty($id) || $id == null)
        <h5>Liste des voyages</h5>
      @else
        <h5>Voyage numéro {{ $id }}</h5>
    @endif
  </div>
@endsection