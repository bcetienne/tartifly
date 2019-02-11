@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Messagerie</h1>
    <div>
      @if (empty($id) || $id === null)
        <h4>Liste des messages</h4>
        <a href="{{ url('message/5') }}">Aller au message numéro 5</a>
        @else
        <h4>Message avec l'id <?php echo $id; ?></h4>
        <a href="{{ url()->previous() }}">Retour à la liste des messages</a>
      @endif
    </div>
  </div>
@endsection