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
      <title>Departamentos</title>
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                        <a class="nav-link" href="#">Informacion General</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tablas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="http://localhost/sistemaInformacion2Capas/departamento">Departamento</a></li>
                           <li><a class="dropdown-item" href="#">Depto_empleado</a></li>
                           <li><a class="dropdown-item" href="#">Empleado</a></li>
                           <li><a class="dropdown-item" href="#">Jefe_departamento</a></li>
                           <li><a class="dropdown-item" href="#">Puesto</a></li>
                           <li><a class="dropdown-item" href="#">Sueldo</a></li>
                        </ul>
                     </li>
                  </ul>

               </div>
            </div>
         </nav>
      </header >
      <main class="contenedor">
         <h2 class="titulo">
         Departamentos</h1>
         <table class="table table-dark table-striped table-hover table-responsive align-middle">
            <thead>
               <tr>
                  <th>dept_no</th>
                  <th>dept_name</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  foreach ($data['data'] as $element) {
                      echo '<tr class = "table-light">';
                      foreach ($element as $key => $value) {
                          echo "<td> {$value} </td>";
                      }
                      echo '</tr>';
                  }
                  ?>
            </tbody>
         </table>
      </main>
      <footer>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>