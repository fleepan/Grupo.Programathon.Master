<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{route('admin.index')}}">Administar Razas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('rp.index')}}">Razas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('tam.index')}}">Listado Tamaños</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('tem.index')}}">Listado Temperamentos</a>
      </li>
    </ul>
  </div>
</nav>
