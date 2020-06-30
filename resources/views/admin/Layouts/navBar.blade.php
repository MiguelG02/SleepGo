<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- SEARCH FORM -->
    <h4 style="font-size: 1.5vw">Administrador</h4>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <!-- User -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="/imagens/logo.png" class="img-circle elevation-2" alt="User Image" height="30" width="50">
          <span class="d-none d-md-inline">{{auth()->User()->name}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header">
            <p>
              {{auth()->User()->name}}
              <small style="font-size: 1vw">NapBox Sleep&Go © 2020 NapBox, Inc.</small>
              <br>
              <a href="#" class="btn btn-danger btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
              <form id="logout-form"action="{{route('logout')}}" method="POST" style="display:nome;">
              @csrf
              </form>
            </p>
          </li>
          <!-- Menu Body -->

          <!-- Menu Footer-->
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>