<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
      <link rel="stylesheet" href="./Assets/css/normalize.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="./Assets/css/style.css">
      <title>Informacion General</title>
   </head>
   <body>
      <header>
         <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
               <a class="navbar-brand" href="http://localhost/sistemaInformacion2Capas/">Base de Datos</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/sistemaInformacion2Capas/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost/sistemaInformacion2Capas/informacion">Informacion General</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tablas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/departamento">Departamento</a></li>
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/depto_empleado">Depto_empleado</a></li>
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/empleado">Empleado</a></li>
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/jefe_departamento">Jefe_departamento</a></li>
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/puesto">Puesto</a></li>
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/sueldo">Sueldo</a></li>
                        </ul>
                     </li>
                  </ul>

               </div>
            </div>
         </nav>
      </header >
      <main class="contenedor">
         <h1 class="titulo">Información General</h1>
         <h2 class="subtitulo">Diseño de la base de datos</h2>
         <p class="text-center">La base de datos que se puede visualizar en esta página, tiene la siguiente estructura</p>
         <img class="responsive-img" src="./Assets/img/db_diagram.png" alt="">
      </main>

      <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="http://localhost/sistemaInformacion2Capas/">
                     <i class="fa-solid fa-database icono"></i>
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius distinctio id quisquam quasi quas saepe inventore dolorem quod aperiam eligendi. Sed perspiciatis mollitia maxime eos laborum similique doloribus, ipsam libero!</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://github.com/RaulEstram/SistemaInformacionDosCapas" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Team UwU</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>