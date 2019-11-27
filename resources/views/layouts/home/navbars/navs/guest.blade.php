<!-- Navbar -->
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="/">
        {{ config('app.name') }} </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ url('/') }}#about" class="nav-link"><i class="material-icons"></i> {{ __('About') }}</a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/') }}#team" class="nav-link"><i class="material-icons"></i> {{ __('Team') }}</a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/') }}#contact" class="nav-link"><i class="material-icons"></i> {{ __('Contact') }}</a>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="material-icons"></i> {{ __('Components') }}
          </a>
          <div class="dropdown-menu dropdown-with-icons">
            <a href="{{ route('portfolio') }}" class="dropdown-item">
              <i class="material-icons">movie_filter</i> {{ __('Portfolio') }}
            </a>
            <a href="{{ route('developer') }}" class="dropdown-item">
              <i class="material-icons">developer_mode</i> {{ __('Developer') }}
            </a>
          </div>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <img src="{{ asset('img') }}/flags/{{ App::getLocale() }}.png" class="local-flag">
          </a>
          <div class="dropdown-menu dropdown-with-icons">
            <a href="{{ url('lang/en') }}" class="dropdown-item">
              <img src="{{ asset('img') }}/flags/en.png" class="local-flag"> {{ __('English') }}
            </a>
            <a href="{{ url('lang/ge') }}" class="dropdown-item">
              <img src="{{ asset('img') }}/flags/ge.png" class="local-flag"> {{ __('Germany') }}
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link"><i class="material-icons"></i> {{ __('Login') }}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->