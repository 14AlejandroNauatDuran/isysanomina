

<div class="wrapper"> 
  <div class="container bg">
  <h1 class="text-center ">Panel de Administracion de nómina</h1>
  </div>  
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand " href="/admin"><img src="build/img/isysa_sf.png" alt="" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/admin">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Catálogos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item"href="/admin-turnos">Turnos</a></li>
            <li><a class="dropdown-item"href="/admin-departamento">Departamentos</a></li>
            <li><a class="dropdown-item"href="/admin-tipoEmpleado">Tipos empleados</a></li>
            <li><a class="dropdown-item"href="/admin-puesto">Puestos</a></li>
            <li><a class="dropdown-item"href="/admin-incentivo">Incentivos</a></li>
            <li><a class="dropdown-item"href="/admin-salarios">Salarios</a></li>
            <li><a class="dropdown-item"href="/admin-produccion">Producción</a></li>
            <li><a class="dropdown-item"href="/admin-incidencia">Incidencias</a></li>

            <li><a class="dropdown-item"href="/admin">Personal</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Operaciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"href="/admin">Semana Contable</a></li>
            <li><a class="dropdown-item"href="/admin">Reportes</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="/admin">Ayuda</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button  class="btn btn-outline-success" type="submit"><a href="/logout">Cerrar sesion</a> </button>
      </form>
    </div>
  </div>
</nav>