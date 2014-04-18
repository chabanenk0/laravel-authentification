<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}">Webs2-Webshop</a>
    </div>
    <ul class="nav navbar-nav">
    @if (Auth::check())
      <li class="{{ Request::is( 'user') ? 'active' : '' }}"><a href="{{ URL::to('user/' . Auth::user()->id . '/profile') }}/profile') }}">Profile</a></li>
    @endif
      <li class="{{ Request::is( 'register') ? 'active' : '' }}"><a href="{{ URL::to('register') }}">Register</a></li>
    </ul>
	@if (!Auth::check())
    <a href="{{ URL::to('login') }}" class="btn btn-default navbar-btn pull-right">Sign in</a>
	@else
    <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">{{ Auth::user()->email }}</a></p>
    <a href="{{ URL::to('logout') }}" class="btn btn-default navbar-btn pull-right">Logout</a>
	@endif
  </div>
</nav>