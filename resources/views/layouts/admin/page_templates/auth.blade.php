<div class="wrapper ">
  @include('layouts.admin.navbars.sidebar')
  <div class="main-panel">
    @include('layouts.admin.navbars.navs.auth')
    @yield('content')
    @include('layouts.admin.footers.auth')
  </div>
</div>