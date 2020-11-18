<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><i class="fa fa-dashborad">Dashboard</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("cart-show")}}"><i class="fa fa-shopping-cart"></i></a>
        </li>


        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Iniciar Sesion</a>
        </div>
        </li>
      </ul>  
    </div>
  </nav>