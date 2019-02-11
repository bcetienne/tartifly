<nav>
    <div class="nav-wrapper container">
    <a href="{{ url('/') }}" class="brand-logo">Tartifly</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">À propos</a></li>
      <li class="{{ Request::is('messages') ? 'active' : '' }}"><a href="{{ url('messages') }}">Messages</a></li>
      <li class="{{ Request::is('travels') ? 'active' : '' }}"><a href="{{ url('travels') }}">Voyages</a></li>
      <li class="{{ Request::is('administration') ? 'active' : '' }}"><a href="{{ url('administration') }}">Administration</a></li>
    </ul>
    </div>
</nav>